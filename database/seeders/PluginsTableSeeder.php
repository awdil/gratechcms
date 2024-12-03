<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PluginsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('plugins')->insert([
            [
                'id' => 1,
                'type' => 'general',
                'name' => 'Google reCAPTCHA v3',
                'code' => 'google-recaptcha',
                'fields_blade' => null,
                'credentials' => json_encode([
                    'recaptcha_key' => null,
                    'recaptcha_secret' => null,
                ]),
                'logo' => 'general/static/plugins/google-recaptcha.svg',
                'description' => 'reCAPTCHA v3 helps you detect abusive traffic on your website without user interaction',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-10-23 05:12:36',
            ],
            [
                'id' => 2,
                'type' => 'general',
                'name' => 'Facebook Messenger',
                'code' => 'fb',
                'fields_blade' => null,
                'credentials' => json_encode([
                    'page_id' => '990335491009901',
                ]),
                'logo' => 'general/static/plugins/fb.png',
                'description' => 'Messenger is a proprietary instant messaging app and platform developed by Meta',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-09-02 07:28:13',
            ],
            [
                'id' => 3,
                'type' => 'general',
                'name' => 'Google Analytics 4',
                'code' => 'google-analytics',
                'fields_blade' => null,
                'credentials' => json_encode([
                    'ga_measurement_id' => 'G-XXXXXXXXXX',
                ]),
                'logo' => 'general/static/plugins/google-analytics.png',
                'description' => 'Google Analytics 4 is an analytics service that lets you to measure traffic and engagement across your websites and apps',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-10-23 05:12:40',
            ],
            [
                'id' => 4,
                'type' => 'general',
                'name' => 'Tawk Chat',
                'code' => 'tawk',
                'fields_blade' => null,
                'credentials' => json_encode([
                    'property_id' => '65e857468d261e1b5f6953aa',
                    'widget_id' => '1ho9p9rq8',
                ]),
                'logo' => 'general/static/plugins/tawk.png',
                'description' => 'Free Instant Messaging system',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-05-20 11:06:58',
            ],
            [
                'id' => 5,
                'type' => 'exchange_rate',
                'name' => 'Currencylayer',
                'code' => 'currencylayer',
                'fields_blade' => '_exchange_rate',
                'credentials' => json_encode([
                    'api_key' => null,
                    'fields' => [
                        'auto_update_time' => '2',
                        'auto_update_time_unit' => '1',
                        'auto_update_status' => '0',
                    ],
                ]),
                'logo' => 'general/static/plugins/currencylayer.jpg',
                'description' => 'With over 15 exchange rate data sources, the Exchangerates API is delivering exchanging rates data for more than 170 world currencies.',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-10-23 05:13:10',
            ],
            [
                'id' => 6,
                'type' => 'exchange_rate',
                'name' => 'Coinmarketcap',
                'code' => 'coinmarketcap',
                'fields_blade' => '_exchange_rate',
                'credentials' => json_encode([
                    'api_key' => null,
                    'fields' => [
                        'auto_update_time' => '1',
                        'auto_update_time_unit' => '1',
                        'auto_update_status' => '0',
                    ],
                ]),
                'logo' => 'general/static/plugins/coinmarketcap.png',
                'description' => 'The world\'s cryptocurrency data authority has a professional API',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-10-23 05:13:17',
            ],
            [
                'id' => 7,
                'type' => 'notification',
                'name' => 'Pusher',
                'code' => 'pusher',
                'fields_blade' => null,
                'credentials' => json_encode([
                    'pusher_app_id' => null,
                    'pusher_app_key' => null,
                    'pusher_app_secret' => null,
                    'pusher_app_cluster' => 'ap2',
                ]),
                'logo' => 'general/static/plugins/pusher.svg',
                'description' => 'Leader In Realtime Technologies. Simple, scalable and reliable. Hosted realtime APIs loved by developers',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-10-23 05:12:53',
            ],
            [
                'id' => 9,
                'type' => 'mail_provider',
                'name' => 'Smtp Config',
                'code' => 'smtp',
                'fields_blade' => '_smtp_info',
                'credentials' => json_encode([
                    'email_from' => 'noreply@coevs.com',
                    'mail_username' => 'noreply@coevs.com',
                    'mail_password' => null,
                    'mail_host' => 'smtp.gmail.com',
                    'mail_port' => '465',
                    'fields' => [
                        'encryption' => 'tls',
                    ],
                ]),
                'logo' => 'general/static/plugins/smtp.png',
                'description' => 'SMTP is the standard protocol for sending and receiving email over the Internet.',
                'status' => 0,
                'created_at' => null,
                'updated_at' => '2024-11-01 09:44:32',
            ],
        ]);
    }
}
