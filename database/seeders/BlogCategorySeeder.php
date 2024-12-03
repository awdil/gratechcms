<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('blog_categories')->insert([
            [
                'name' => json_encode([
                    'en' => 'Database Security',
                    'es' => 'Seguridad de',
                ]),
                'is_active' => 1,
                'created_at' => '2024-03-14 17:30:33',
                'updated_at' => '2024-07-01 09:43:27',
            ],
            [
                'name' => json_encode([
                    'en' => 'IT Consultancy',
                    'es' => 'Consultoría TI',
                ]),
                'is_active' => 1,
                'created_at' => '2024-03-14 18:09:36',
                'updated_at' => '2024-05-14 21:34:27',
            ],
            [
                'name' => json_encode([
                    'en' => 'App Development',
                    'es' => 'Desarrollo de aplicaciones',
                ]),
                'is_active' => 1,
                'created_at' => '2024-03-14 18:10:57',
                'updated_at' => '2024-05-14 21:34:39',
            ],
            [
                'name' => json_encode([
                    'en' => 'Diseño UI/UX',
                ]),
                'is_active' => 1,
                'created_at' => '2024-03-14 18:11:02',
                'updated_at' => '2024-05-14 21:34:49',
            ],
            [
                'name' => json_encode([
                    'en' => 'La seguridad cibernética',
                ]),
                'is_active' => 1,
                'created_at' => '2024-03-14 18:11:10',
                'updated_at' => '2024-05-14 21:34:58',
            ],
        ]);

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
