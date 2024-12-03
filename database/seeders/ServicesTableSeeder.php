<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'name' => json_encode([
                    'en' => 'IT Management',
                    'es' => 'Gestión de TI'
                ]),
                'slug' => 'it-management',
                'price' => 667,
                'light_icon' => 'general/images/M2HVz79GkCeRn6OprjXj.png',
                'dark_icon' => 'general/images/dVv1mnNVsvbsGeYuNNMb.png',
                'cover' => 'general/images/J4yUHPfUIZqCEtkDzHqu.jpg',
                'video_cover' => 'general/images/s92ytKubE4QSmSpXQv7X.jpg',
                'video_link' => 'https://www.sahisel.cm',
                'description' => json_encode([
                    'en' => '<p class="mb-20" style="...">The is ipsum dolor sit amet ...</p>',
                    'es' => '<p class="mb-20" style="...">The is ipsum dolor sit amet ...</p>'
                ]),
                'faq_content' => null,
                'side_content' => null,
                'tags' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'en' => 'Database Security',
                    'es' => 'Gestión de TI',
                ]),
                'slug' => 'database-security',
                'price' => 789,
                'light_icon' => 'general/images/7PcBBBTRtqoelANe30cp.png',
                'dark_icon' => 'general/images/Jkj7MP3vEDmcWlm7wayO.png',
                'cover' => 'general/images/Z9sDx8bUcSl5gPy2SLwt.jpg',
                'video_cover' => 'general/images/kOBZFcP3tkOitNuLNZXA.jpg',
                'video_link' => 'https://www.sahisel.cm',
                'description' => json_encode([
                    'en' => '... English HTML content ...',
                    'es' => '... Spanish HTML content ...',
                ]),
                'faq_content' => null, // Add content if available
                'side_content' => null, // Add content if available
                'tags' => null, // Add tags if available
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => json_encode(['en' => 'IT Consultancy', 'es' => 'Gestión de TI']),
                'slug' => 'it-consultancy',
                'price' => 569,
                'light_icon' => 'general/images/BHXCvBiGAI8DcqJyh3XF.png',
                'dark_icon' => 'general/images/ZJBdpAnZAspkWn0Mmw12.png',
                'cover' => 'general/images/jUNS23DkyVa2JtgsQpE5.jpg',
                'video_cover' => 'general/images/TR15bJXCo993YWUkgPFb.jpg',
                'video_link' => 'https://www.sahisel.cm',
                'description' => json_encode([
                    'en' => '<p class="mb-20">The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend porta arcu...</p>',
                    'es' => '<p class="mb-20">The is ipsum dolor sit amet consectetur adipiscing elit. Fusce is eleifend porta arcu...</p>',
                ]),
                'faq_content' => null, // Add content if required
                'side_content' => null, // Add content if required
                'tags' => null, // Add tags if required
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => json_encode(['en' => 'App Development', 'es' => 'Gestión de TI']),
                'slug' => 'app-development',
                'price' => 487,
                'light_icon' => 'general/images/5jxESWaPQuZAL4AXQMtU.png',
                'dark_icon' => 'general/images/nMB5kFVTcgUaKflU02EM.png',
                'cover' => 'general/images/eithXquKxDAHHGwd8tHh.jpg',
                'video_cover' => 'general/images/GQGiTS09RBXx6IRkKbkq.jpg',
                'video_link' => 'https://www.sahisel.cm',
                'description' => json_encode([
                    'en' => '<p class="mb-20" style="line-height: 28px; font-size: 16px;">The is ipsum dolor sit amet consectetur adipiscing elit...</p>',
                    'es' => '<p class="mb-20" style="line-height: 28px; font-size: 16px;">The is ipsum dolor sit amet consectetur adipiscing elit...</p>',
                ]),
                'faq_content' => null,
                'side_content' => null,
                'tags' => null,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'en' => 'Cyber Security',
                    'es' => 'Gestión de TI',
                ]),
                'slug' => 'cyber-security',
                'price' => 746,
                'light_icon' => 'general/images/czfQmkGyXNTV17HyUjZQ.png',
                'dark_icon' => 'general/images/7OyrC4v2uNZ3iJMnXHDa.png',
                'cover' => 'general/images/FZEwIhTbaViqY9DguZmy.jpg',
                'video_cover' => 'general/images/DNpNY1ZABvLzWVocMO5D.jpg',
                'video_link' => 'https://www.sahisel.cm',
                'description' => json_encode([
                    'en' => '<p class="mb-20" style="line-height: 28px; font-size: 16px;">The is ipsum dolor sit amet consectetur adipiscing elit...</p>',
                    'es' => '<p class="mb-20" style="line-height: 28px; font-size: 16px;">The is ipsum dolor sit amet consectetur adipiscing elit...</p>',
                ]),
                'faq_content' => null, // Replace with the appropriate value if available
                'side_content' => null, // Replace with the appropriate value if available
                'tags' => null, // Replace with the appropriate value if available
                'status' => 1, // Adjust the status value if necessary
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

