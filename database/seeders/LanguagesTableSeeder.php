<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->insert([
            [
                'id' => 13,
                'name' => 'English',
                'code' => 'en',
                'is_default' => 1,
                'is_rtl' => 0,
                'status' => 1,
                'created_at' => '2024-04-18 20:20:22',
                'updated_at' => '2024-07-24 22:52:35',
            ],
            [
                'id' => 19,
                'name' => 'Spanish',
                'code' => 'es',
                'is_default' => 0,
                'is_rtl' => 0,
                'status' => 1,
                'created_at' => '2024-05-01 02:01:46',
                'updated_at' => '2024-07-24 22:52:35',
            ],
        ]);
    }
}
