<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('plans')->insert([
            [
                'id' => 2,
                'name' => json_encode(['en' => 'Basic Plan', 'es' => 'Plan básico']),
                'icon' => 'general/images/4AW3e2DPlF4wFK7p1pPu.png',
                'background_shape' => 'general/images/ZZ44l6QSoeM50enf5D96.png',
                'monthly_price' => 39,
                'yearly_price' => 399,
                'badge' => null,
                'features' => json_encode([
                    'en' => [
                        'Free 15 GB Linux Hosting',
                        'Dedicated Tech Experts',
                        '24/7 System Monitoring',
                        'Security Management',
                        'Unlimited Download',
                    ],
                    'es' => [
                        'Linux gratuito de 15 GB',
                        'Expertos en tecnología',
                        '24/7 Monitoreo del sistema',
                        'Gestión de seguridad',
                        'Descarga ilimitada',
                    ],
                ]),
                'status' => 1,
                'created_at' => '2024-09-28 00:30:24',
                'updated_at' => '2024-10-22 09:35:37',
            ],
            [
                'id' => 4,
                'name' => json_encode(['en' => 'Standard Plan', 'es' => 'Plan estándar']),
                'icon' => 'general/images/4AW3e2DPlF4wFK7p1pPu.png',
                'background_shape' => 'general/images/ZZ44l6QSoeM50enf5D96.png',
                'monthly_price' => 59,
                'yearly_price' => 699,
                'badge' => null,
                'features' => json_encode([
                    'en' => [
                        'Free 35 GB Linux Hosting',
                        'Dedicated Tech Experts',
                        '24/7 System Monitoring',
                        'Security Management',
                        'Unlimited Download',
                    ],
                    'es' => [
                        'Linux gratuito de 35 GB',
                        'Expertos en tecnología',
                        '24/7 Monitoreo del sistema',
                        'Gestión de seguridad',
                        'Descarga ilimitada',
                    ],
                ]),
                'status' => 1,
                'created_at' => '2024-09-28 00:30:24',
                'updated_at' => '2024-10-22 09:35:50',
            ],
            [
                'id' => 5,
                'name' => json_encode(['en' => 'Premium Plan', 'es' => 'Plan Premium']),
                'icon' => 'general/images/4AW3e2DPlF4wFK7p1pPu.png',
                'background_shape' => 'general/images/ZZ44l6QSoeM50enf5D96.png',
                'monthly_price' => 79,
                'yearly_price' => 899,
                'badge' => null,
                'features' => json_encode([
                    'en' => [
                        'Free 55 GB Linux Hosting',
                        'Dedicated Tech Experts',
                        '24/7 System Monitoring',
                        'Security Management',
                        'Unlimited Download',
                    ],
                    'es' => [
                        'Linux gratuito de 55 GB',
                        'Expertos en tecnología',
                        '24/7 Monitoreo del sistema',
                        'Gestión de seguridad',
                        'Descarga ilimitada',
                    ],
                ]),
                'status' => 1,
                'created_at' => '2024-09-28 00:30:24',
                'updated_at' => '2024-10-22 09:36:08',
            ],
        ]);
    }
}
