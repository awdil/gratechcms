<?php

namespace App\Services;

use App\Constants\MethodType;
use App\Constants\TxnStatus;
use App\Constants\TxnType;
use App\Facades\BalanceFacade as UserBalance;
use App\Facades\SubscriptionFacade as Subscription;
use App\Models\Admin;
use App\Models\Transaction;
use App\Notifications\Admin\DepositNotify as AdminDepositNotify;
use App\Notifications\Admin\ServiceNotify as AdminServiceNotify;
use App\Notifications\Admin\SubscriptionNotify as AdminSubscriptionNotify;
use App\Notifications\User\DepositActionNotify as UserDepositActionNotify;
use App\Notifications\User\DepositNotify as UserDepositNotify;
use App\Notifications\User\ServiceActionNotify as UserServiceActionNotify;
use App\Notifications\User\ServiceNotify as UserServiceNotify;
use App\Notifications\User\SubscriptionActionNotify as UserSubscriptionActionNotify;
use App\Notifications\User\SubscriptionNotify as UserSubscriptionNotify;
use Exception;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class TransactionService
{
    // Fetch user transactions with optional filters (e.g., pagination, ordering)
    public function getTransactions(
        ?int $userId = null,
        array $type = [],
        array $methodType = [],
        ?string $status = null,
        int $perPage = 10,
        string $sortBy = 'created_at',
        string $order = 'desc'
    ): \Illuminate\Contracts\Pagination\LengthAwarePaginator {
        // Retrieve request parameters only once
        $search = request('search');
        $status = request('status') ?? $status;
        $type = request('type') && request('type') != 'all' ? explode(',', request('type')) : $type;
        $methodType = request('method_type') && request('method_type') != 'all' ? explode(',', request('method_type')) : $methodType;

        // Handle date range parsing with Carbon
        $dateRange = request('daterange');
        if (! empty($dateRange)) {
            $dateRange = explode(',', $dateRange);
            $startDate = \Carbon\Carbon::parse($dateRange[0])->startOfDay();
            $endDate = \Carbon\Carbon::parse($dateRange[1])->endOfDay();
        }

        // Build the query with scope filters
        $query = Transaction::with(['user:id,first_name,last_name']) // Eager load 'user' model
            ->filterByUser($userId)
            ->filterByType($type)
            ->filterByMethodType($methodType)
            ->filterByStatus($status)
            ->filterByDateRange($dateRange)
            ->search($search) // Use the search scope here
            ->orderBy($sortBy, $order);

        // Paginate results with query string
        return $query->paginate($perPage)->withQueryString();
    }

    public function getTotalAmount($type, $status, $userId = null)
    {
        return Transaction::filterByUser($userId)
            ->countAmount($type, $status);
    }

    // Get a transaction by transaction ID
    public function createTransaction(array $data): Transaction
    {
        return Transaction::create([
            'user_id' => $data['user_id'],
            'txid' => 'TXN'.Str::upper(Str::random(12)),
            'type' => $data['type'],
            'amount' => $data['amount'],
            'fee' => $data['fee'] ?? 0,
            'currency' => $data['currency'] ?? setting('site_currency'),
            'method_type' => $data['method_type'] ?? MethodType::AUTO,
            'method' => title($data['method'] ?? 'system'),
            'pay_amount' => $data['pay_amount'] ?? null,
            'pay_currency' => $data['pay_currency'] ?? null,
            'array_data' => $data['array_data'] ?? null,
            'action_cause' => $data['action_cause'] ?? null,
            'description' => title($data['description'] ?? ''),
            'status' => $data['status'] ?? TxnStatus::PENDING,
        ]);
    }

    // Create a new transaction

    /**
     * @throws Exception
     */
    public function completeTransaction(string $txId): void
    {
        $this->updateTransactionStatus($txId, TxnStatus::COMPLETED);
        $transaction = $this->getTransaction($txId);
        $user = $transaction->user;

        // Mapping transaction types to respective actions and notifications
        $transactionActions = [
            TxnType::DEPOSIT => function () use ($transaction, $user) {
                UserBalance::add($user, $transaction->amount);
                $user->notify(new UserDepositNotify($transaction));

                if ($transaction->method_type == MethodType::AUTO) {
                    $this->notifyAdmins('deposit-notification', new AdminDepositNotify($transaction));
                }
            },
            TxnType::SUBSCRIPTION => function () use ($transaction, $user) {
                Subscription::updateSubscriptionAfterPayment($transaction->id);
                $user->notify(new UserSubscriptionNotify($transaction));

                if ($transaction->method_type == MethodType::AUTO) {
                    $this->notifyAdmins('subscription-notification', new AdminSubscriptionNotify($transaction));
                }
            },
            TxnType::RENEW_SUBSCRIPTION => function () use ($transaction, $user) {
                Subscription::renewSubscription($transaction->user_id, $transaction->id);
                $user->notify(new UserSubscriptionNotify($transaction));

                if (in_array($transaction->method_type, [MethodType::AUTO, MethodType::SYSTEM])) {
                    $this->notifyAdmins('subscription-notification', new AdminSubscriptionNotify($transaction));
                }
            },
            TxnType::SERVICE_PURCHASE => function () use ($transaction, $user) {
                $user->notify(new UserServiceNotify($transaction));

                if (in_array($transaction->method_type, [MethodType::AUTO, MethodType::SYSTEM])) {
                    $this->notifyAdmins('service-notification', new AdminServiceNotify($transaction));
                }
            },
        ];

        // Execute the action based on the transaction type
        if (isset($transactionActions[$transaction->type])) {
            $transactionActions[$transaction->type]();
        }
    }

    // Complete a transaction by updating status and notifying user

    protected function updateTransactionStatus(string $txId, string $status): void
    {
        Transaction::where('txid', $txId)->update(['status' => $status]);
    }

    // Helper method to notify admins based on permission

    public function getTransaction(string $txId): ?Transaction
    {
        return Transaction::where('txid', $txId)->first();
    }

    // Fail a transaction by updating status

    protected function notifyAdmins(string $permission, $notification): void
    {
        $admins = Admin::permission($permission)->get();
        Notification::send($admins, $notification);
    }

    // Update specific fields of a transaction

    public function failTransaction(string $txId): void
    {
        $this->updateTransactionStatus($txId, TxnStatus::FAILED);
        $transaction = $this->getTransaction($txId);


        // Map transaction types to corresponding notification classes
        $notificationMap = [
            TxnType::DEPOSIT => UserDepositActionNotify::class,
            TxnType::SUBSCRIPTION => UserSubscriptionActionNotify::class,
            TxnType::RENEW_SUBSCRIPTION => UserSubscriptionActionNotify::class,
            TxnType::SERVICE_PURCHASE => UserServiceActionNotify::class,
        ];

        // Check if a notification class exists for the transaction type
        if (isset($notificationMap[$transaction->type])) {
            $notificationClass = $notificationMap[$transaction->type];
            $transaction->user->notify(new $notificationClass($transaction));
        }
    }

    // Update the status of a transaction

    public function fieldsValueUpdate(string $txId, array $data): void
    {
        Transaction::where('txid', $txId)->update($data);
    }
}
