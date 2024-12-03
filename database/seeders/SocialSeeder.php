<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            [
                'id' => 1,
                'name' => 'Facebook',
                'icon_class' => 'fa-brands fa-facebook-f',
                'target' => '_blank',
                'url' => '#',
                'status' => 1,
                'created_at' => '2024-03-05 22:58:30',
                'updated_at' => '2024-03-06 09:50:08',
            ],
            [
                'id' => 2,
                'name' => 'Twitter',
                'icon_class' => 'fa-regular fa-x',
                'target' => '_blank',
                'url' => '#',
                'status' => 1,
                'created_at' => '2024-03-05 22:58:58',
                'updated_at' => '2024-08-18 02:40:23',
            ],
            [
                'id' => 3,
                'name' => 'Linkedin',
                'icon_class' => 'fa-brands fa-linkedin-in',
                'target' => '_blank',
                'url' => '#',
                'status' => 1,
                'created_at' => '2024-03-05 23:00:00',
                'updated_at' => '2024-03-05 23:00:00',
            ],
            [
                'id' => 4,
                'name' => 'Youtube',
                'icon_class' => 'fa-brands fa-youtube',
                'target' => '_blank',
                'url' => '#',
                'status' => 1,
                'created_at' => '2024-03-05 23:00:19',
                'updated_at' => '2024-03-05 23:00:19',
            ]
        ]);
    }
}
