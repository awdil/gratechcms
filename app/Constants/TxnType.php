<?php

namespace App\Constants;

class TxnType
{
    public const DEPOSIT = 'deposit';

    public const SERVICE_PURCHASE = 'service_purchase';

    public const SUBSCRIPTION = 'subscription';
    public const RENEW_SUBSCRIPTION = 'renew_subscription';

    public const ADD_BALANCE = 'add_balance';

    public const SUBTRACT_BALANCE = 'subtract_balance';

    public const TYPE = [
        self::DEPOSIT,
        self::SERVICE_PURCHASE,
        self::SUBSCRIPTION,
        self::RENEW_SUBSCRIPTION,
    ];
}
