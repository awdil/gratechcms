<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support_categories')->insert([
            [
                'id' => 4,
                'name' => 'Account Issues',
                'status' => 1,
                'created_at' => '2024-10-05 12:46:38',
                'updated_at' => '2024-10-22 22:36:50',
            ],
            [
                'id' => 5,
                'name' => 'Billing and Payments',
                'status' => 1,
                'created_at' => '2024-10-22 22:37:09',
                'updated_at' => '2024-10-22 22:37:09',
            ],
            [
                'id' => 6,
                'name' => 'Technical Support',
                'status' => 1,
                'created_at' => '2024-10-22 22:39:38',
                'updated_at' => '2024-10-22 22:39:38',
            ],
            [
                'id' => 7,
                'name' => 'Order Management',
                'status' => 1,
                'created_at' => '2024-10-22 22:39:46',
                'updated_at' => '2024-10-22 22:39:46',
            ],
            [
                'id' => 8,
                'name' => 'Product Information',
                'status' => 1,
                'created_at' => '2024-10-22 22:39:52',
                'updated_at' => '2024-10-22 22:39:52',
            ],
            [
                'id' => 9,
                'name' => 'General Inquiries',
                'status' => 1,
                'created_at' => '2024-10-22 22:40:01',
                'updated_at' => '2024-10-22 22:40:01',
            ]
        ]);
    }
}
