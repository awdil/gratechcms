<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_customs')->insert([
            [
                'id' => 1,
                'type' => 'css',
                'value' => '//The Custom CSS will be added on the site head tag \r\n.site-head-tag {\r\n\tmargin: 0;\r\n\tpadding: 0;\r\n}',
                'is_active' => 0,
                'created_at' => '2024-05-05 11:00:36',
                'updated_at' => '2024-05-05 12:29:29',
            ],
            [
                'id' => 2,
                'type' => 'script',
                'value' => 'function generateSlug(value) {\r\n    return value.toLowerCase().replace(/\\s+/g, \'-\').replace(/[^a-z0-9-]/g, \'\');\r\n}',
                'is_active' => 0,
                'created_at' => '2024-05-05 11:00:36',
                'updated_at' => '2024-05-05 12:29:02',
            ]
        ]);
    }
}
