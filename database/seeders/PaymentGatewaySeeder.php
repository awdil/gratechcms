<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewaySeeder extends Seeder
{
    public function run()
    {
        DB::table('payment_gateways')->insert([
            [
                'id' => 1,
                'logo' => 'general/static/gateway/paypal.png',
                'name' => 'Paypal',
                'code' => 'paypal',
                'currencies' => json_encode([
                    "USD", "EUR", "GBP", "CAD", "AUD", "JPY", "SGD", "NZD", "CHF", 
                    "SEK", "NOK", "DKK", "PLN", "HUF", "CZK", "ILS", "BRL", "MXN", 
                    "HKD", "TWD", "TRY", "INR", "RUB", "ZAR", "MYR", "THB", "IDR", 
                    "PHP", "NGN", "GHS"
                ]),
                'credentials' => json_encode([
                    'client_id' => 'AUnfkQ3v2J-d5g-ZEq8l5Oosha8FmAJ3Z9jt71BkD6l-Z3FMIR5FmkYp_6QHwaYx0LvMNvHDsB9Vh84O',
                    'client_secret' => 'EJjci35CFj762ut15pn0VWmojEG0GwE68byyHnBq_NoAXXW9mjkjdLFYLfVQwyLs8QAbP1QJAXPl5oAl',
                    'app_id' => 'APP-80W284485P519543T',
                    'mode' => 'sandbox'
                ]),
                'is_withdraw' => NULL,
                'status' => 1,
                'created_at' => '2024-09-03 01:15:41',
                'updated_at' => '2024-10-20 20:12:22'
            ],
            [
                'id' => 2,
                'logo' => 'general/static/gateway/stripe.png',
                'name' => 'Stripe',
                'code' => 'stripe',
                'currencies' => json_encode([
                    "USD", "AUD", "BRL", "CAD", "CHF", "DKK", "EUR", "GBP", "HKD", 
                    "INR", "JPY", "MXN", "MYR", "NOK", "NZD", "PLN", "SEK", "SGD"
                ]),
                'credentials' => json_encode([
                    'stripe_key' => 'pk_test_51QCDexGMiQWh4ibfOPw9hZolWrnVD8Y3VSxJH9sSbwb0jGEfA1n3kztLwGTiztJtfLsJ87MP0ZycGMJiUW8A3d2000Twic22WG',
                    'stripe_secret' => 'sk_test_51QCDexGMiQWh4ibfKcun6XAlwtBGf01KeBaEsGBfeQzyWmn04mInGDXT5cYxOVXGJcC0l1rwuH7c3rkxjGX5KABC00tGislRIA',
                    'webhook_secret' => 'whsec_PWkKsIVVBmmhIksj8tCWzLz4eQfF945P'
                ]),
                'is_withdraw' => NULL,
                'status' => 1,
                'created_at' => '2024-09-03 01:15:41',
                'updated_at' => '2024-10-20 23:23:20'
            ],
            [
                'id' => 3,
                'logo' => 'general/static/gateway/mollie.png',
                'name' => 'Mollie',
                'code' => 'mollie',
                'currencies' => json_encode([
                    "EUR", "USD", "GBP", "CAD", "AUD", "CHF", "DKK", "NOK", "SEK", 
                    "PLN", "CZK", "HUF", "RON", "BGN", "HRK", "ISK", "ZAR"
                ]),
                'credentials' => json_encode([
                    'api_key' => 'test_intSTCDEBaDSu28D6DUpn5wnQhTnzB'
                ]),
                'is_withdraw' => NULL,
                'status' => 1,
                'created_at' => '2024-09-03 01:15:41',
                'updated_at' => '2024-10-20 23:23:20'
            ],
            [
                'id' => 4,
                'logo' => 'general/static/gateway/perfectmoney.png',
                'name' => 'Perfect Money',
                'code' => 'perfectmoney',
                'currencies' => json_encode(["USD", "EUR", "RUB", "UAH"]),
                'credentials' => json_encode([
                    'account_id' => '96793260',
                    'pass_phrase' => '77887848a',
                    'merchant_id' => 'U36928259'
                ]),
                'is_withdraw' => NULL,
                'status' => 1,
                'created_at' => '2024-09-03 01:15:41',
                'updated_at' => '2024-10-20 23:23:20'
            ],
            [
                'id' => 5,
                'logo' => 'general/static/gateway/coinbase.png',
                'name' => 'Coinbase',
                'code' => 'coinbase',
                'currencies' => json_encode([
                    "USD", "EUR", "GBP", "CAD", "AUD", "JPY", "BTC", "ETH", "LTC", 
                    "BCH", "XRP", "EOS"
                ]),
                'credentials' => json_encode([
                    'api_key' => '8ef6c4ca-f5c7-4717-9d9a-002adf7e7590',
                    'webhook_secret' => 'b789f547-8954-4880-89ae-5a0233006647',
                    'api_version' => '2018-03-22'
                ]),
                'is_withdraw' => NULL,
                'status' => 1,
                'created_at' => '2024-09-03 01:15:41',
                'updated_at' => '2024-10-20 23:23:20'
            ],
        ]);
    }
}

