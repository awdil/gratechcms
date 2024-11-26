<?php

namespace App\Services;

use App\Constants\PlanType;
use App\Constants\SubscriptionStatus;
use App\Models\Subscription;
use Carbon\Carbon;
use Exception;

class SubscriptionService
{
    /**
     * Create a new subscription.
     *
     * @throws Exception
     */
    public function createSubscription($plan, $planType, $txnId, $status = SubscriptionStatus::PENDING): Subscription
    {
        $userId = auth()->id();

        // Calculate the start and expiry dates for the subscription
        $startDate = Carbon::today();
        $endDate = $startDate->copy()->addMonths($planType == PlanType::MONTHLY ? 1 : 12);

        // Check if a subscription already exists for the user
        $subscription = Subscription::where('user_id', $userId)
            ->where('expiry_date', '>', Carbon::now())
            ->first();

        if ($subscription) {
            // Check if the new plan is different from the current plan
            if ($subscription->plan_id == $plan->id) {
                throw new Exception('You are already subscribed to this plan.');
            }
            $endDate = $startDate->copy()->addMonths($planType == PlanType::MONTHLY ? 1 : 12);
        }

        // Create or update the subscription record
        return Subscription::updateOrCreate(
            ['user_id' => $userId], // Find by user_id
            [
                'plan_id' => $plan->id,
                'duration_type' => $planType,
                'transaction_id' => $txnId,
                'start_date' => $startDate,
                'expiry_date' => $endDate,
                'status' => $status, // Default to PENDING
            ]
        );
    }

    /**
     * Update subscription after successful payment.
     *
     * @throws Exception
     */
    public function updateSubscriptionAfterPayment(int $transactionId): Subscription
    {
        $subscription = Subscription::where('transaction_id', $transactionId)->firstOrFail();

        // Update subscription duration and status
        $subscription->expiry_date = $subscription->expiry_date->addDays(today()->diffInDays($subscription->start_date));
        $subscription->status = SubscriptionStatus::ACTIVE;
        $subscription->save();

        return $subscription;
    }

    /**
     * Renew subscription by extending expiration date.
     *
     * @throws Exception
     */
    public function renewSubscription(int $userId, string $transactionId): Subscription
    {
        $subscription = Subscription::where('user_id', $userId)->firstOrFail();

        $months = $subscription->duration_type == PlanType::MONTHLY ? 1 : 12;

        // Extend the expiration date
        $subscription->expiry_date = $subscription->expiry_date->addMonths($months);
        $subscription->transaction_id = $transactionId;
        $subscription->save();
        return $subscription;
    }

    /**
     * Expire subscriptions where expiration date has passed.
     */
    public function expireSubscriptions(): void
    {
        // Perform batch update to expire subscriptions in a single query
        Subscription::where('expiry_date', '<', Carbon::now())
            ->where('status', SubscriptionStatus::ACTIVE)
            ->update(['status' => SubscriptionStatus::EXPIRED]);
    }

    /**
     * Check the subscription status by user ID.
     */
    public function checkSubscriptionStatus(int $userId): string
    {
        // Use select to retrieve only necessary fields for better query performance
        $subscription = Subscription::where('user_id', $userId)
            ->where('expiry_date', '>', Carbon::now())
            ->select('status')
            ->first();

        return $subscription->status ?? SubscriptionStatus::EXPIRED;
    }
}
