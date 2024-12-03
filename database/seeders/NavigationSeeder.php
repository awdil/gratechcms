<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavigationSeeder extends Seeder
{
    public function run()
    {
        DB::table('navigations')->insert([
            [
                'id' => 9,
                'name' => json_encode(['en' => 'Home', 'es' => 'Hogar']),
                'slug' => '/',
                'page_id' => 1,
                'header_order' => 1,
                'footer_order' => 15,
                'display' => 'both',
                'target' => '_self',
                'is_active' => 1,
                'created_at' => '2024-03-06 23:16:05',
                'updated_at' => '2024-10-23 00:10:26',
            ],
            [
                'id' => 10,
                'name' => json_encode(['en' => 'Blog', 'es' => 'Blog']),
                'slug' => 'blog',
                'page_id' => 3,
                'header_order' => 3,
                'footer_order' => 16,
                'display' => 'both',
                'target' => '_self',
                'is_active' => 1,
                'created_at' => '2024-03-15 18:18:12',
                'updated_at' => '2024-10-23 00:10:26',
            ],
            [
                'id' => 11,
                'name' => json_encode(['en' => 'About', 'es' => 'Acerca de']),
                'slug' => 'about',
                'page_id' => 4,
                'header_order' => 4,
                'footer_order' => 17,
                'display' => 'both',
                'target' => '_self',
                'is_active' => 1,
                'created_at' => '2024-03-18 00:39:30',
                'updated_at' => '2024-10-23 00:10:26',
            ],
            [
                'id' => 12,
                'name' => json_encode(['en' => 'Service', 'es' => 'Servicio']),
                'slug' => '/service',
                'page_id' => NULL,
                'header_order' => 2,
                'footer_order' => 0,
                'display' => 'header',
                'target' => '_self',
                'is_active' => 1,
                'created_at' => '2024-03-18 17:12:32',
                'updated_at' => '2024-10-23 00:10:26',
            ],
            [
                'id' => 13,
                'name' => json_encode(['en' => 'Contact', 'es' => 'Contacto']),
                'slug' => 'contact',
                'page_id' => 6,
                'header_order' => 5,
                'footer_order' => 18,
                'display' => 'both',
                'target' => '_self',
                'is_active' => 1,
                'created_at' => '2024-03-20 01:22:37',
                'updated_at' => '2024-10-23 00:10:26',
            ],
            [
                'id' => 19,
                'name' => json_encode(['en' => 'FAQ', 'es' => 'Preguntas']),
                'slug' => '/faq',
                'page_id' => 7,
                'header_order' => 6,
                'footer_order' => 14,
                'display' => 'footer',
                'target' => '_self',
                'is_active' => 1,
                'created_at' => '2024-10-23 00:08:56',
                'updated_at' => '2024-10-23 00:09:08',
            ],
        ]);
    }
}
