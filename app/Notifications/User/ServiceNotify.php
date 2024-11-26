<?php

namespace App\Notifications\User;

use App\Constants\NotificationType;
use App\Models\Order;
use App\Notifications\NotificationBase;
use Illuminate\Bus\Queueable;

class ServiceNotify extends NotificationBase
{
    use Queueable;

    private mixed $serviceName;

    private object $transaction;

    /**
     * Create a new notification instance.
     *
     * @return void
     * @throws \Exception
     */
    public function __construct($transaction)
    {
        $this->transaction = $transaction;

        // Eager load order and service
        $order = Order::with('service')->where('transaction_id', $transaction->id)->first();
        $this->serviceName = $order->service->name['en'] ?? 'service';

        parent::__construct(NotificationType::SERVICE_USER);
    }

    protected function arrayData(): array
    {
        return [
            'service_name' => $this->serviceName,
            'amount' => $this->formatCurrency($this->transaction->amount),
            'type' => $this->transaction->type,
            'action_link' => route('user.service.my'),
        ];
    }
}
