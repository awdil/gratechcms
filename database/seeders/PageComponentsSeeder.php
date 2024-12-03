<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageComponentsSeeder extends Seeder
{
    public function run()
    {
        // CREATE TABLE `page_components` (
        // `id` bigint UNSIGNED NOT NULL,
        // `content_id` bigint DEFAULT NULL,
        // `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        // `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `category` varchar(196) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dynamic',
        // `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
        // `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static',
        // `content_fields` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'this fields for component contents table',
        // `with_modal` tinyint NOT NULL DEFAULT '1',
        // `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
        // `sort` int NOT NULL DEFAULT '60',
        // `preview` varchar(196) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        // `created_at` timestamp NULL DEFAULT NULL,
        // `updated_at` timestamp NULL DEFAULT NULL
        // ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        $record46 = '';
        $ComponentData = [
            [
                'id' => 1,
                'content_id' => null,
                'icon' => 'general/static/component/banner.png',
                'name' => 'Banner Default',
                'section' => 'banner',
                'category' => 'banner',
                'content' => json_encode([
                    'en' => [
                        'background' => ['type' => 'img', 'value' => 'general/images/eYXIYYvGq4j0T5lsKJee.png', 'class' => 'col-md-3'],
                        'left_shape' => ['type' => 'img', 'value' => 'general/images/7F6ZcrzzmUevyrVvXOWB.png', 'class' => 'col-md-3'],
                        'left_image' => ['type' => 'img', 'value' => 'general/images/Ph7kTCg55ISxqArcboWD.png', 'class' => 'col-md-3'],
                        'right_shape' => ['type' => 'img', 'value' => 'general/images/nNQrrwtTkLgw8eEbo7pR.png', 'class' => 'col-md-3'],
                        'sub_heading' => ['type' => 'text', 'value' => 'TECHNOLOGY RELATED CONSULTANCY', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Make The Easiest Solution For You', 'class' => 'col-md-6'],
                        'content' => ['type' => 'textarea', 'value' => 'Consectetur adipiscing elit Aenean scelerisque at augue vitae consequat quisque eget congue velit in cursus leo Sed sodales', 'class' => 'col-md-12'],
                        'button_title' => ['type' => 'text', 'value' => 'Explore More', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false],
                        'video_button_title' => ['type' => 'text', 'value' => 'How It Works', 'class' => 'col-md-6'],
                        'video_button_link' => ['type' => 'text', 'value' => 'https://www.youtube.com/watch?v=iVqz_4M5mA0', 'class' => 'col-md-6', 'trans' => false],
                    ],
                    'es' => [
                        'sub_heading' => ['type' => 'text', 'value' => 'CONSULTORÍA RELACIONADA EN TECNOLOGÍA', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Haga la solución más sencilla para usted', 'class' => 'col-md-6'],
                        'content' => ['type' => 'textarea', 'value' => 'Consectetur adipiscing elit Aenean scelerisque at augue vitae consequat quisque eget congue velit in cursus leo Sed sodales', 'class' => 'col-md-12'],
                        'button_title' => ['type' => 'text', 'value' => 'Explora más', 'class' => 'col-md-6'],
                        'video_button_title' => ['type' => 'text', 'value' => 'Cómo funciona', 'class' => 'col-md-6'],
                    ]
                ]),
                'type' => 'static',
                'content_fields' => null,
                'with_modal' => 1,
                'status' => 1,
                'sort' => 1,
                'preview' => 'general/images/5hXmO370Xk3ZJq4IrY9i.jpg',
                'created_at' => '2024-05-14 02:47:48',
                'updated_at' => null
            ],
            [
                'id' => 2,
                'content_id' => null,
                'icon' => 'general/static/component/service.png',
                'name' => 'Service area',
                'section' => 'service',
                'category' => 'service',
                'content' => json_encode([
                    'en' => [
                        'shape' => ['type' => 'img', 'value' => null, 'class' => 'col-md-6'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/ceExPRVyCQvC5bMf6Qcc.png', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'FROM OUR CASE studies', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'We Delivered Best Solution', 'class' => 'col-md-6'],
                        'limit_list' => ['type' => 'text', 'value' => '3', 'class' => 'col-md-6'],
                        'limit_summary' => ['type' => 'text', 'value' => '80', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'sub_heading' => ['type' => 'text', 'value' => 'DE NUESTROS CASOS', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Entregamos la mejor solución', 'class' => 'col-md-6'],
                    ]
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => 1,
                'sort' => 2,
                'preview' => 'general/images/1JjLmIWqL5mUVMFKLSxi.jpg',
                'created_at' => '2024-10-19 08:52:58',
                'updated_at' => null
            ],
            [
                'id' => 3,
                'content_id' => NULL,
                'icon' => 'general/static/component/brand.png',
                'name' => 'Brand area',
                'section' => 'brand',
                'category' => 'brand',
                'content' => '{"en":{"case_background":{"type":"img","value":"general/images/DDzFTPgp6U8QdcTjLGcT.jpg","class":"col-md-6"},"brand_line_1":{"type":"img","value":"general/images/oia3dcYaIx2qBm0ngutd.png","class":"col-md-6"},"brand_line_2":{"type":"img","value":"general/images/M7XMzCVy1kAsO0hC0v8o.png","class":"col-md-4"},"brand_shape_1":{"type":"img","value":"general/images/ZBsLl7p91vFBctHvGv5t.png","class":"col-md-4"},"brand_shape_2":{"type":"img","value":"general/images/IowR0yHrBRbk7nn3NANh.png","class":"col-md-4"}}}',
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => '1',
                'sort' => 3,
                'preview' => 'general/images/FMKiku7lp69YYSCYOhV0.jpg',
                'created_at' => '2024-05-07 10:16:53',
                'updated_at' => NULL,
            ],
            [
                'id' => 4,
                'content_id' => NULL,
                'icon' => 'general/static/component/about.png',
                'name' => 'About area',
                'section' => 'about',
                'category' => 'about',
                'content' => '{"en":{"line_shape":{"type":"img","value":"general/images/WoIdnnO6Sdvh2iPcQ1Gr.png","class":"col-md-6"},"box_up_shape":{"type":"img","value":"general/images/r1eiyh7VshM5NU2OdN2u.png","class":"col-md-6"},"box_down_shape":{"type":"img","value":"general/images/E6LLzSPcbuBhZBBLD8zm.png","class":"col-md-4"},"section_title_icon":{"type":"img","value":"general/images/2w2YVw3fQ3oiAXA1JE1u.png","class":"col-md-4"},"right_item_icon":{"type":"img","value":"general/images/IQyJTXkyL1D5GD445Fiy.png","class":"col-md-4"},"right_item_icon_2":{"type":"img","value":"general/images/QLZfs81HZY4ciXxZFUuO.png","class":"col-md-4"},"center_item_avatar":{"type":"img","value":"general/images/lehRAASdGlEl2oACFQhb.png","class":"col-md-4"},"dot_shape":{"type":"img","value":"general/images/jlk9SbvrzRdSnaROyQgl.png","class":"col-md-4"},"count_icon":{"type":"img","value":"general/images/yzBJyIcquJ1ZTyQGKKQI.png","class":"col-md-4"},"faq_line":{"type":"img","value":"general/images/AR4qBRWmgCOWHac7I0BQ.png","class":"col-md-4"},"main_image":{"type":"img","value":"general/images/9u660LPq1htqp3epDbVc.png","class":"col-md-4"},"section_heading":{"type":"text","value":"Selecting the Finest IT Service Provider","class":"col-md-6"},"section_sub_heading":{"type":"text","value":"ABOUT gratech","class":"col-md-6"},"section_description":{"type":"text","value":"It is a long established fact that a reader will be distracted the readable content of a page when looking at layout the point of using lorem the is Ipsum less normal.","class":"col-md-12"},"right_item_heading":{"type":"text","value":"Business Growth","class":"col-md-6"},"right_item_heading_2":{"type":"text","value":"Technology Consultancy","class":"col-md-6"},"center_item_heading":{"type":"text","value":"Ronald Richards","class":"col-md-6"},"center_item_sub_heading":{"type":"text","value":"Co, Founder","class":"col-md-6"},"center_item_heading_2":{"type":"text","value":"Call Us Now","class":"col-md-6"},"center_item_sub_heading_2":{"type":"text","value":"+208-555-0112","class":"col-md-6"},"count_heading":{"type":"text","value":"6,561","class":"col-md-6"},"count_sub_heading":{"type":"text","value":"Satisfied Clients","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => '1',
                'sort' => 4,
                'preview' => 'general/images/wprPOsrugaOaoivfQpNa.jpg',
                'created_at' => '2024-05-14 22:33:00',
                'updated_at' => NULL,
            ],
            [
                'id' => 5,
                'content_id' => NULL,
                'icon' => 'general/static/component/counter.png',
                'name' => 'Counter area',
                'section' => 'counter',
                'category' => 'counter',
                'content' => '{"en":{"shape_background":{"type":"img","value":"general/images/n8yh3FA4QkUlPIlbY00T.png","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"icon":{"type":"img","class":"col-md-12"},"counter":{"type":"text","class":"col-md-6"},"title":{"type":"text","class":"col-md-6"}}',
                'with_modal' => 1,
                'status' => '1',
                'sort' => 5,
                'preview' => 'general/images/NDbnD4dVdEXSZv2PQZps.jpg',
                'created_at' => '2024-05-07 10:23:38',
                'updated_at' => NULL,
            ],
            [
                'id' => 6,
                'content_id' => NULL,
                'icon' => 'general/static/component/project.png',
                'name' => 'Case Study',
                'section' => 'project',
                'category' => 'project',
                'content' => '{"en":{"left_shape":{"type":"img","value":"general/images/aOLm18rpCB4ujsinwiBv.png","class":"col-md-4"},"right_shape":{"type":"img","value":"general/images/IVkX1Jk5U5ujqQfgRYwK.png","class":"col-md-4"},"sub_heading_icon":{"type":"img","value":"general/images/0qOtiDIKFqZI0Uzhdgoj.png","class":"col-md-4"},"heading":{"type":"text","value":"FROM OUR CASE studies","class":"col-md-6"},"sub_heading":{"type":"text","value":"Latest Project Are Here","class":"col-md-6"}},"es":{"heading":{"type":"text","value":"DE NUESTROS CASOS","class":"col-md-6"},"sub_heading":{"type":"text","value":"El último proyecto está aquí","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"cover_image":{"type":"img","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => '1',
                'sort' => 6,
                'preview' => 'general/images/NDbnD4dVdEXSZv2PQZps.jpg',
                'created_at' => '2024-05-07 10:23:38',
                'updated_at' => '2024-05-07 10:23:38',
            ],
            [
                'id' => 7,
                'content_id' => NULL,
                'icon' => 'general/static/component/video_banner.png',
                'name' => 'VIdeo Banner area',
                'section' => 'video_banner',
                'type' => 'banner',
                'content' => '{"en":{"video_image":{"type":"img","value":"general/images/8SfaYrNhk5Ina79NXJ82.jpg","class":"col-md-6"},"video_link":{"type":"text","value":"https://www.youtube.com/watch?v=iVqz_4M5mA0","class":"col-md-12","trans":false}}}',
                'category' => 'static',
                'content_fields' => NULL,
                'status' => 1,
                'with_modal' => '1',
                'sort' => 7,
                'preview' => 'general/images/oqcnac9ObF7SfSJz8Czs.jpg',
                'updated_at' => NULL,
                'created_at' => '2024-05-07 10:44:00',
            ],
            [
                'id' => 8,
                'content_id' => NULL,
                'icon' => 'general/static/component/pricing.png',
                'name' => 'Pricing area',
                'section' => 'pricing',
                'type' => 'pricing',
                'content' => '{"en":{"shape_up":{"type":"img","value":"general/images/F9ERm7kxz8BqP3sWhayl.png","class":"col-md-6"},"shape_down":{"type":"img","value":"general/images/ujWFzGo4uZfMcrs0BWCi.png","class":"col-md-6"},"shape":{"type":"img","value":"general/images/a7aszCO6zq4r2Kf5SSH4.png","class":"col-md-6"},"title_icon":{"type":"img","value":"general/images/9p0NsXiK0MM6qWJspWtg.png","class":"col-md-6"},"heading":{"type":"text","value":"PRICE PLANS","class":"col-md-6"},"sub_heading":{"type":"text","value":"Flexible Pricing Plans","class":"col-md-6"}}}',
                'category' => 'static',
                'content_fields' => '{"plan_shape":{"type":"img","class":"col-md-6"},"plan_icon":{"type":"img","class":"col-md-6"},"name":{"type":"text","class":"col-md-6"},"price":{"type":"text","class":"col-md-6"},"duration":{"type":"text","class":"col-md-6"},"feature_1":{"type":"text","class":"col-md-6"},"feature_2":{"type":"text","class":"col-md-6"},"feature_3":{"type":"text","class":"col-md-6"},"feature_4":{"type":"text","class":"col-md-6"},"feature_5":{"type":"text","class":"col-md-6"},"button_name":{"type":"text","class":"col-md-6"},"button_link":{"type":"text","class":"col-md-6"}}',
                'status' => 1,
                'with_modal' => '1',
                'sort' => 8,
                'preview' => 'general/images/mC22t7CEv67FOXnULO3x.jpg',
                'updated_at' => NULL,
                'created_at' => '2024-05-14 20:41:14',
            ],
            [
                'id' => 9,
                'content_id' => NULL,
                'icon' => 'general/static/component/testimonial.png',
                'name' => 'Testimonial area',
                'section' => 'testimonial',
                'type' => 'testimonial',
                'content' => '{"en":{"testimonial_background":{"type":"img","value":"general/images/KfihrKKhovXEX2pqOdCl.png","class":"col-md-6"},"testimonial_title_icon":{"type":"img","value":"general/images/MGFo48SazkGw7Y6lrYPq.png","class":"col-md-6"},"heading":{"type":"text","value":"Hundreds of clients worldwide trust our IT solution","class":"col-md-6"},"sub_heading":{"type":"text","value":"Testimonials","class":"col-md-6"}}}',
                'category' => 'static',
                'content_fields' => '{"testimonial_item_avatar":{"type":"img","class":"col-md-12"},"name":{"type":"text","class":"col-md-6"},"profession":{"type":"text","class":"col-md-6"},"rating":{"type":"text","class":"col-md-12"},"comment":{"type":"textarea","class":"col-md-12"}}',
                'status' => 1,
                'with_modal' => '1',
                'sort' => 9,
                'preview' => 'general/images/BFfSsg98rID59p19kKV8.jpg',
                'updated_at' => NULL,
                'created_at' => '2024-05-14 20:41:31',
            ],
            [
                'id' => 10,
                'content_id' => NULL,
                'icon' => 'general/static/component/blog.png',
                'name' => 'Blog area',
                'section' => 'blog',
                'type' => 'blog',
                'content' => '{"en":{"title_icon":{"type":"img","value":"general/images/8CWx8hxBlsFPblsrbKXm.png","class":"col-md-6"},"heading":{"type":"text","value":"Explore Blogs and News","class":"col-md-12"},"sub_heading":{"type":"text","value":"Blog & news","class":"col-md-12"}}}',
                'category' => 'static',
                'content_fields' => NULL,
                'status' => 1,
                'with_modal' => '1',
                'sort' => 10,
                'preview' => 'general/images/HzRHIw2hcxtsMd5NLyul.jpg',
                'updated_at' => NULL,
                'created_at' => '2024-05-14 20:41:51',
            ],
             [
                'id' => 11,
                'content_id' => NULL,
                'icon' => 'general/static/component/blog-list.png',
                'name' => 'Blog Standard',
                'section' => 'blog_list',
                'type' => 'blog',
                'content' => json_encode([
                    'en' => [
                        'per_page_blog' => ['type' => 'text', 'value' => '2', 'class' => 'col-md-6', 'trans' => false]
                    ]
                ]),
                'category' => 'static',
                'content_fields' => NULL,
                'with_modal' => 1,
                'status' => '1',
                'sort' => 10,
                'preview' => 'general/images/YtLbeD5MLKMlOZAWUdm4.jpg',
                
                'created_at' => '2024-05-07 11:41:57'
            ],
            [
                'id' => 12,
                'content_id' => NULL,
                'icon' => 'general/static/component/who-we-are.png',
                'name' => 'Who We Are',
                'section' => 'who_we_are',
                'type' => 'we are',
                'content' => json_encode([
                    'en' => [
                        'big_image' => ['type' => 'img', 'value' => 'general/images/NinGN5tMJNryGDGpv1ZM.jpg', 'class' => 'col-md-6'],
                        'sm_image' => ['type' => 'img', 'value' => 'general/images/Ds3WFgHFWx7itimvQHcI.png', 'class' => 'col-md-6'],
                        'shape' => ['type' => 'img', 'value' => 'general/images/VRUJYT10pzK1Ba6ZAadm.png', 'class' => 'col-md-4'],
                        'dot' => ['type' => 'img', 'value' => 'general/images/vjjksYs3OD22xjgJvSvL.png', 'class' => 'col-md-4'],
                        'circle' => ['type' => 'img', 'value' => 'general/images/XSr7XtTUTBWo4XCtgTgv.png', 'class' => 'col-md-4'],
                        'circle_two' => ['type' => 'img', 'value' => 'general/images/KioIYRQSg8I28X9QVomi.png', 'class' => 'col-md-4'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/6ANlZimaQlmDjBqhVmkA.png', 'class' => 'col-md-4'],
                        'signature' => ['type' => 'img', 'value' => 'general/images/bxc6ptmmoLSZMeojbANk.png', 'class' => 'col-md-4'],
                        'heading' => ['type' => 'text', 'value' => 'Ensuring Your Success Through Reliable IT Solutions', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'WHO WE ARE', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Aonsectetur adipiscing elit aenean scelerisque augue vitae consequat aisque eget congue velit in cursus sodales the turpis euismod quis sapien euismod is sapien the condimentum nec lorem nulla augue.', 'class' => 'col-md-12'],
                        'list_line_1' => ['type' => 'text', 'value' => 'Technology Consultancy', 'class' => 'col-md-6'],
                        'list_line_2' => ['type' => 'text', 'value' => 'We Provide best services', 'class' => 'col-md-6'],
                        'list_line_3' => ['type' => 'text', 'value' => 'Maintenance And Support', 'class' => 'col-md-6'],
                        'list_line_4' => ['type' => 'text', 'value' => 'Requirements Gathering', 'class' => 'col-md-6'],
                        'button_text' => ['type' => 'text', 'value' => 'Explore More', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false]
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Garantizar su éxito a través de soluciones de TI confiables', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'QUIENES SOMOS', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Aonsectetur adipiscing elit aenean scelerisque auge vitae consequat aisque eget congue velit in cursus miembros the turpis euismod quis sapien euismod is sapien the condimentum nec lorem no ague', 'class' => 'col-md-12'],
                        'list_line_1' => ['type' => 'text', 'value' => 'Consultoría Tecnológica', 'class' => 'col-md-6'],
                        'list_line_2' => ['type' => 'text', 'value' => 'Brindamos los mejores servicios', 'class' => 'col-md-6'],
                        'list_line_3' => ['type' => 'text', 'value' => 'Mantenimiento y soporte', 'class' => 'col-md-6'],
                        'list_line_4' => ['type' => 'text', 'value' => 'Recopilación de requisitos', 'class' => 'col-md-6'],
                        'button_text' => ['type' => 'text', 'value' => 'Explora más', 'class' => 'col-md-6']
                    ]
                ]),
                'category' => 'static',
                'content_fields' => NULL,
                'with_modal' => 1,
                'status' => '1',
                'sort' => 11,
                'preview' => 'general/images/6jp8uyrLbNKU4aYrgt7O.jpg',
                
                'created_at' => '2024-05-14 20:44:32'
            ],
            [
                'id' => 13,
                'content_id' => NULL,
                'icon' => 'general/static/component/our-offering.png',
                'name' => 'Our Offering',
                'section' => 'our_offering',
                'type' => 'offering',
                'content' => json_encode([
                    'en' => [
                        'shadow_shape' => ['type' => 'img', 'value' => 'general/images/9XOjHQrBVZpehzZP1Dqx.png', 'class' => 'col-md-6'],
                        'shape_left' => ['type' => 'img', 'value' => 'general/images/frcJyZBV6mi916YfgDSS.png', 'class' => 'col-md-6'],
                        'shape_right' => ['type' => 'img', 'value' => 'general/images/WRBtw8ujtjk4WjxLlKDn.png', 'class' => 'col-md-6'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/Rr8EWeBIeRqNUjuidvQx.png', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Our Offering for Enhanced Efficiency', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'OUR OFFERINGS', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tincidunt dolor sit amet cursus urna.', 'class' => 'col-md-12'],
                        'button_text' => ['type' => 'text', 'value' => 'Learn More', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6']
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Nuestra oferta para una mayor eficiencia', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'NUESTRAS OFERTAS', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tincidunt dolor sit amet cursus urna.', 'class' => 'col-md-12'],
                        'button_text' => ['type' => 'text', 'value' => 'Saber más', 'class' => 'col-md-6']
                    ]
                ]),
                'category' => 'static',
                'content_fields' => NULL,
                'with_modal' => 1,
                'status' => '1',
                'sort' => 12,
                'preview' => 'general/images/9vX06uClJ1aJ7drhHJdl.png',
                
                'created_at' => '2024-05-15 10:25:45'
            ],
            [
                'id' => 14,
                'content_id' => NULL,
                'icon' => 'general/static/component/our-team.png',
                'name' => 'Our Team',
                'section' => 'our_team',
                'type' => 'team',
                'content' => json_encode([
                    'en' => [
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/B7TppyyLdxL1l499WBec.png', 'class' => 'col-md-12'],
                        'heading' => ['type' => 'text', 'value' => 'Our Leadership Team', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'OUR TEAM', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Nuestro equipo de liderazgo', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'NUESTRO EQUIPO', 'class' => 'col-md-6'],
                    ]
                ]),
                'category' => 'static',
                'content_fields' => NULL,
                'with_modal' => 1,
                'status' => '1',
                'sort' => 13,
                'preview' => 'general/images/zD7luDKPBwLi3uv4uYb9.jpg',
                
                'created_at' => '2024-05-14 20:46:47'
            ],
            // Service Grid
            [
                'id' => 15,
                'content_id' => 2,
                'icon' => 'general/static/component/service-grid.png',
                'name' => 'Service Grid',
                'section' => 'service_grid',
                'type' => 'service',
                'content' => json_encode([]),
                'category' => 'static',
                'content_fields' => 2,
                'with_modal' => 1,
                'status' => '1',
                'sort' => 2,
                'preview' => 'general/images/e5CXq30dktclNLqNUTyA.jpg',
                
                'created_at' => '2024-05-07 20:46:52'
            ],
            // Faq
            [
                'id' => 16,
                'content_id' => NULL,
                'icon' => 'general/static/component/faq.png',
                'name' => 'Faq',
                'section' => 'faq',
                'type' => 'faq',
                'content' => json_encode([
                    'en' => [
                        'shape' => ['type' => 'img', 'value' => 'general/images/cIqaFgCE3M7T5bKSCiIz.png', 'class' => 'col-md-6'],
                        'icon' => ['type' => 'img', 'value' => 'general/images/WlxQpHouZMaxujW6w3yP.png', 'class' => 'col-md-6'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/RGT1KFoJs6nlbDkwr2HB.png', 'class' => 'col-md-6'],
                        'line' => ['type' => 'img', 'value' => 'general/images/xuwXnEUQjNnOWTS5JMhq.png', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Most Common  Question?', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'FAQ', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Preguntas más frecuentes', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => '¿Pregunta más común?', 'class' => 'col-md-6'],
                    ]
                ]),
                'category' => 'static',
                'content_fields' => NULL,
                'with_modal' => 1,
                'status' => '1',
                'sort' => 14,
                'preview' => 'general/images/G8H4xjjYkpmxqljlMwsl.jpg',
                
                'created_at' => '2024-05-14 23:34:13'
            ],
            [
                'id' => 17,
                'content_id' => NULL,
                'icon' => 'general/static/component/contact.png',
                'name' => 'Contact',
                'section' => 'contact',
                'type' => 'contact',
                'content' => json_encode([
                    'en' => [
                        'contact_number' => ['type' => 'text', 'value' => '+208-6666-0112, +308-5555-0113', 'class' => 'col-md-6'],
                        'support_mail' => ['type' => 'text', 'value' => 'support@gratech.com', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'GET IN TOUCH', 'class' => 'col-md-12'],
                        'left_headding' => ['type' => 'text', 'value' => 'Contact Information', 'class' => 'col-md-6'],
                        'right_headding' => ['type' => 'text', 'value' => 'Ready To Get Started?', 'class' => 'col-md-6'],
                        'left_information' => ['type' => 'textarea', 'value' => 'Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis. Quisque.', 'class' => 'col-md-6'],
                        'right_information' => ['type' => 'textarea', 'value' => 'varius,erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis.Quisque rhoncus, eros in auctor ultrices,', 'class' => 'col-md-6'],
                        'opening_hours' => ['type' => 'text', 'value' => 'Mon - Sat: 10.00 AM - 4.00 PM', 'class' => 'col-md-12'],
                        'address' => ['type' => 'text', 'value' => '4517 Washington ave.', 'class' => 'col-md-12'],
                        'Latitude' => ['type' => 'text', 'value' => '52.5069386', 'class' => 'col-md-6'],
                        'Longitude' => ['type' => 'text', 'value' => '13.2599276', 'class' => 'col-md-6'],
                        'footer_description' => ['type' => 'textarea', 'value' => 'Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis', 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'contact_number' => ['type' => 'text', 'value' => '+208-6666-0112, +308-5555-0113', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'PONERSE EN CONTACTO', 'class' => 'col-md-12'],
                        'left_headding' => ['type' => 'text', 'value' => 'Información del contacto', 'class' => 'col-md-6'],
                        'right_headding' => ['type' => 'text', 'value' => '¿Listo para empezar?', 'class' => 'col-md-6'],
                        'left_information' => ['type' => 'textarea', 'value' => 'No hay juego, se decía a los blancos, el eros urn eros eros, como halago el odio futbolístico en lo feo. Todos', 'class' => 'col-md-6'],
                        'right_information' => ['type' => 'textarea', 'value' => 'varius, se decía al objetivo, eros urn eros eros, como halago el odio futbolístico en el turpis.', 'class' => 'col-md-6'],
                        'opening_hours' => ['type' => 'text', 'value' => 'Lunes a sábado: 10:00 a. m. - 4:00 p. m.', 'class' => 'col-md-12'],
                        'address' => ['type' => 'text', 'value' => '4517 avenida Washington.', 'class' => 'col-md-12'],
                        'footer_description' => ['type' => 'textarea', 'value' => 'Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis', 'class' => 'col-md-12']
                    ]
                ]),
                'category' => 'static',
                'content_fields' => null,
                'status' => 0,
                'sort' => 1,
                'preview' => 'general/images/upawnP7bHhYBM6H1zELi.jpg',
                'created_at' => '2024-07-16 00:00:48',
            ],
            [
                'id' => 18,
                'content_id' => NULL,
                'icon' => 'general/static/component/banner2.png',
                'name' => 'Banner Classic Slider',
                'section' => 'banner_classic_slider',
                'type' => 'banner',
                'content' => json_encode([
                    'en' => [
                        'banner_line' => ['type' => 'img', 'value' => 'general/images/X1iWi49xY3UifirbV9JP.png', 'class' => 'col-md-6']
                    ]
                ]),
                'category' => 'static',
                'content_fields' => json_encode([
                    'regular_left_shape' => ['type' => 'img', 'class' => 'col-md-6'],
                    'solid_left_shape' => ['type' => 'img', 'class' => 'col-md-6'],
                    'shape_left' => ['type' => 'img', 'class' => 'col-md-6'],
                    'shape_right_line' => ['type' => 'img', 'class' => 'col-md-6'],
                    'shape_right' => ['type' => 'img', 'class' => 'col-md-6'],
                    'right_line1' => ['type' => 'img', 'class' => 'col-md-6'],
                    'right_line2' => ['type' => 'img', 'class' => 'col-md-6'],
                    'right_line3' => ['type' => 'img', 'class' => 'col-md-6'],
                    'right_line4' => ['type' => 'img', 'class' => 'col-md-6'],
                    'slide_bg' => ['type' => 'img', 'class' => 'col-md-6'],
                    'heading' => ['type' => 'text', 'class' => 'col-md-6'],
                    'sub_heading' => ['type' => 'text', 'class' => 'col-md-6'],
                    'description' => ['type' => 'textarea', 'class' => 'col-md-12'],
                    'button_title' => ['type' => 'text', 'class' => 'col-md-6'],
                    'button_link' => ['type' => 'text', 'class' => 'col-md-6']
                ]),
                'status' => 1,
                'sort' => 1,
                'preview' => 'general/images/ajNu1H1lPUzdhZz9AdC0.jpg',
                'created_at' => '2024-05-08 10:15:04',
            ],
            [
                'id' => 19,
                'content_id' => NULL,
                'icon' => 'general/static/component/banner3.png',
                'name' => 'Banner Elegant Slider',
                'section' => 'banner_elegant_slider',
                'type' => 'banner',
                'content' => json_encode([
                    'en' => [
                        'banner_line' => ['type' => 'img', 'value' => 'general/images/H3wcidxsCpOM8SQ274ax.png', 'class' => 'col-md-6']
                    ]
                ]),
                'category' => 'static',
                'content_fields' => json_encode([
                    'left_line' => ['type' => 'img', 'class' => 'col-md-6'],
                    'solid_right_down' => ['type' => 'img', 'class' => 'col-md-6'],
                    'solid_right_up' => ['type' => 'img', 'class' => 'col-md-6'],
                    'right_shape' => ['type' => 'img', 'class' => 'col-md-6'],
                    'circle_solid' => ['type' => 'img', 'class' => 'col-md-6'],
                    'circle_regular' => ['type' => 'img', 'class' => 'col-md-6'],
                    'background' => ['type' => 'img', 'class' => 'col-md-12'],
                    'heading' => ['type' => 'text', 'class' => 'col-md-6'],
                    'sub_heading' => ['type' => 'text', 'class' => 'col-md-6'],
                    'summary' => ['type' => 'textarea', 'class' => 'col-md-12'],
                    'button_text' => ['type' => 'text', 'class' => 'col-md-6'],
                    'button_link' => ['type' => 'text', 'class' => 'col-md-6']
                ]),
                'status' => 1,
                'sort' => 2,
                'preview' => 'general/images/tvVpW4shfm2f3V1NE7qq.jpg',
                'created_at' => '2024-05-08 10:40:21',
            ], 
            [
                'id' => 20,
                'content_id' => null,
                'icon' => 'general/static/component/service2.png',
                'name' => 'Service Classic',
                'section' => 'service_classic',
                'category' => 'service',
                'content' => json_encode([
                    'en' => [
                        'shape' => ['type' => 'img', 'value' => 'general/images/pS7mPAStmiND1Ve9lyhJ.png', 'class' => 'col-md-6'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/4SyDa9CZNsdLzCr0qeip.png', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'FROM OUR CASE studies', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'We Delivered Best Solution', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'View All Services', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6'],
                        'limit_list' => ['type' => 'text', 'value' => '3', 'class' => 'col-md-6'],
                        'limit_summary' => ['type' => 'text', 'value' => '80', 'class' => 'col-md-6']
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'DE NUESTROS CASOS', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'Entregamos la mejor solución', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'Ver todos los servicios', 'class' => 'col-md-6']
                    ]
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => '1',
                'sort' => 2,
                'preview' => 'general/images/HKvBZtlVekOKYwcF6WIk.jpg',
                'created_at' => '2024-10-22 10:41:07',
                'updated_at' => null
            ],
            [
                'id' => 21,
                'content_id' => 6,
                'icon' => 'general/static/component/project2.png',
                'name' => 'Case Study Classic',
                'section' => 'project_classic',
                'category' => 'project',
                'content' => json_encode([
                    'en' => [
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/WMrNAfomeXbJDirIukFu.png', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'FROM OUR CASE studies', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'Latest Project Are Here', 'class' => 'col-md-12'],
                        'button_title' => ['type' => 'text', 'value' => 'view All Case', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false]
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'DE NUESTROS CASOS', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'El último proyecto está aquí', 'class' => 'col-md-12'],
                        'button_title' => ['type' => 'text', 'value' => 'ver todos los casos', 'class' => 'col-md-6']
                    ]
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => '1',
                'sort' => 6,
                'preview' => 'general/images/POsr9CJiOc00DOGYf4rs.jpg',
                'created_at' => '2024-05-14 21:08:11',
                'updated_at' => null
            ],
            [
                'id' => 22,
                'content_id' => null,
                'icon' => 'general/static/component/process.png',
                'name' => 'Work Process',
                'section' => 'work_process',
                'category' => 'process',
                'content' => json_encode([
                    'en' => [
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/Q9v2lsQvua3Ef4nkuS5L.png', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Hundreds of clients worldwide trust our IT solution', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'Testimonials', 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Cientos de clientes en todo el mundo confían en nuestra solución TI', 'class' => 'col-md-12'],
                        'sub_heading' => ['type' => 'text', 'value' => 'Testimonios', 'class' => 'col-md-12']
                    ]
                ]),
                'type' => 'static',
                'content_fields' => json_encode([
                    'array_icon' => ['type' => 'img', 'class' => 'col-md-6'],
                    'process_icon' => ['type' => 'img', 'class' => 'col-md-6'],
                    'process_number' => ['type' => 'text', 'class' => 'col-md-6'],
                    'title00' => ['type' => 'text', 'class' => 'col-md-12'],
                    'description' => ['type' => 'textarea', 'class' => 'col-md-12']
                ]),
                'with_modal' => 1,
                'status' => '1',
                'sort' => 16,
                'preview' => 'general/images/MZLb306V4Gsyg3ql2AFW.jpg',
                'created_at' => '2024-05-14 21:08:32',
                'updated_at' => null
            ],
            [
                'id' => 23,
                'content_id' => 9,
                'icon' => 'general/static/component/testimonial2.png',
                'name' => 'Testimonial Premium',
                'section' => 'testimonial_premium',
                'category' => 'testimonial',
                'content' => json_encode([
                    'en' => [
                        'background' => ['type' => 'img', 'value' => 'general/images/KmDVDiqGycOIXHBzrbUK.png', 'class' => 'col-md-6'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/Hxcu7FNf5HHLFL80GCIC.png', 'class' => 'col-md-6'],
                        'left_heading' => ['type' => 'text', 'value' => 'How May We Help You!', 'class' => 'col-md-6'],
                        'left_sub_heading' => ['type' => 'text', 'value' => 'TALK TO US', 'class' => 'col-md-6'],
                        'right_heading' => ['type' => 'text', 'value' => 'What They Say   About Our', 'class' => 'col-md-6'],
                        'right_sub_heading' => ['type' => 'text', 'value' => 'CLIENTS REVIEW', 'class' => 'col-md-6'],
                        'right_description' => ['type' => 'textarea', 'value' => 'It is a long\r\n                                established fact that a reader will be distracted the readable content\r\n                                of a page when looking at layout the\r\n                                point of using lorem the is Ipsum less normal distribution of letters.', 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'left_heading' => ['type' => 'text', 'value' => '¡Cómo podemos ayudarle!', 'class' => 'col-md-6'],
                        'left_sub_heading' => ['type' => 'text', 'value' => 'HABLAMOS', 'class' => 'col-md-6'],
                        'right_heading' => ['type' => 'text', 'value' => 'Lo que dicen de nuestra', 'class' => 'col-md-6'],
                        'right_sub_heading' => ['type' => 'text', 'value' => 'RESEÑAS DE CLIENTES', 'class' => 'col-md-6'],
                        'right_description' => ['type' => 'textarea', 'value' => 'Es un hecho establecido hace mucho tiempo que un lector se distraerá al mirar\r\nla distribución normal de letras en un\r\npágina cuando mira el diseño.', 'class' => 'col-md-12']
                    ]
                ]),
                'type' => 'static',
                'content_fields' => json_encode([
                    'array_testimonial' => ['type' => 'text', 'class' => 'col-md-12'],
                    'icon' => ['type' => 'img', 'class' => 'col-md-12'],
                    'content' => ['type' => 'text', 'class' => 'col-md-12']
                ]),
                'with_modal' => 1,
                'status' => '1',
                'sort' => 23,
                'preview' => 'general/images/PC9jmu7XbOD7ljw9INzv.jpg',
                'created_at' => '2024-05-14 21:08:54',
                'updated_at' => null
            ],
             [
                'id' => 24,
                'content_id' => null,
                'icon' => 'general/static/component/choose.png',
                'name' => 'Why Choose Us',
                'section' => 'why_choose_us',
                'category' => 'choose',
                'content' => '{"en":{"video_link":{"type":"text","value":"https://www.youtube.com/watch?v=iVqz_4M5mA0","class":"col-md-12","trans":false},"cover_photo":{"type":"img","value":"general/images/M8colm1a32dMlohG0wse.png","class":"col-md-6"},"shape_right":{"type":"img","value":"general/images/xZpa4EJdfVzzCLaBjtie.png","class":"col-md-6"},"shape_right2":{"type":"img","value":"general/images/UnbqWjDTj86Dr2v3a56v.png","class":"col-md-6"},"shape_left":{"type":"img","value":"general/images/ENU3RNEYAgc2qUMfmLcQ.png","class":"col-md-6"},"right_item_icon":{"type":"img","value":"general/images/EXWrohcQ1zeOelap0sIS.png","class":"col-md-6"},"right_item_icon2":{"type":"img","value":"general/images/ttefQx7IVW1YABvz48N8.png","class":"col-md-6"},"section_heading":{"type":"text","value":"Elevate Your  Achievements Using Premier IT Solutions","class":"col-md-6"},"section_sub_heading":{"type":"text","value":"WHY Choose US","class":"col-md-6"},"right_item_heading":{"type":"text","value":"Best Services","class":"col-md-6"},"right_item_description":{"type":"text","value":"Scelerisque augue the consequat sodales","class":"col-md-6"},"right_item_heading2":{"type":"text","value":"24/7 Call Support","class":"col-md-6"},"right_item_description2":{"type":"text","value":"Scelerisque augue the consequat sodales","class":"col-md-6"},"progress_title":{"type":"text","value":"Information Technology","class":"col-md-6"},"progress_count":{"type":"text","value":"86","class":"col-md-6","trans":false},"progress2_title":{"type":"text","value":"Technology Consultant","class":"col-md-6"},"progress2_count":{"type":"text","value":"95","class":"col-md-6","trans":false}},"es":{"section_heading":{"type":"text","value":"Eleve sus logros utilizando soluciones de TI de primer nivel","class":"col-md-6"},"section_sub_heading":{"type":"text","value":"Por qué elegirnos","class":"col-md-6"},"right_item_heading":{"type":"text","value":"Mejores Servicios","class":"col-md-6"},"right_item_description":{"type":"text","value":"Los chocolates promocionan","class":"col-md-6"},"right_item_heading2":{"type":"text","value":"Soporte telefóni","class":"col-md-6"},"right_item_description2":{"type":"text","value":"Los chocolates promocionan a","class":"col-md-6"},"progress_title":{"type":"text","value":"Tecnologías de la información","class":"col-md-6"},"progress2_title":{"type":"text","value":"Consultor Tecnológico","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => '1',
                'sort' => 18,
                'preview' => 'general/images/1Mmz0vicVRHYyo6uHfhY.jpg',
                'created_at' => '2024-05-14 21:15:10',
                'updated_at' => null,
            ],
            [
                'id' => 25,
                'content_id' => 6,
                'icon' => 'general/static/component/project3.png',
                'name' => 'Case Study Elegent',
                'section' => 'project_elegent',
                'category' => 'project',
                'content' => '{"en":{"background":{"type":"img","value":"general/images/wwA6L1gw1J182zm72MCQ.png","class":"col-md-12"},"heading":{"type":"text","value":"FROM OUR CASE studies","class":"col-md-6"},"sub_heading":{"type":"text","value":"We Delivered Best Solution","class":"col-md-6"}},"es":{"heading":{"type":"text","value":"DE NUESTROS CASOS","class":"col-md-6"},"sub_heading":{"type":"text","value":"Entregamos la mejor solución","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => '1',
                'sort' => 6,
                'preview' => 'general/images/m64VpnFpkbPGpuUUwwg5.jpg',
                'created_at' => '2024-05-14 21:15:43',
                'updated_at' => null,
            ],
            [
                'id' => 26,
                'content_id' => null,
                'icon' => 'general/static/component/about.png',
                'name' => 'About Us Section',
                'section' => 'about_us',
                'category' => 'about',
                'content' => '{"en":{"background":{"type":"img","value":"general/images/about_bg.png","class":"col-md-12"},"title":{"type":"text","value":"About Our Company","class":"col-md-6"},"description":{"type":"text","value":"We are committed to delivering innovative solutions.","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => '1',
                'sort' => 12,
                'preview' => 'general/images/about_preview.png',
                'created_at' => '2024-06-01 10:00:00',
                'updated_at' => null,
            ],
            [
                'id' => 27,
                'content_id' => null,
                'icon' => 'general/static/component/contact.png',
                'name' => 'Contact Us',
                'section' => 'contact_us',
                'category' => 'contact',
                'content' => '{"en":{"phone":{"type":"text","value":"+123456789","class":"col-md-6"},"email":{"type":"text","value":"info@example.com","class":"col-md-6"},"address":{"type":"text","value":"123 Main Street, City, Country","class":"col-md-6"}}}',
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => '1',
                'sort' => 20,
                'preview' => 'general/images/contact_preview.png',
                'created_at' => '2024-06-05 15:30:00',
                'updated_at' => null,
            ],
            [
                'id' => 28,
                'content_id' => null,
                'icon' => 'general/static/component/touch.png',
                'name' => 'Get Touch',
                'section' => 'get_touch',
                'category' => 'touch',
                'content' => json_encode([
                    'en' => [
                        'shape' => ['type' => 'img', 'value' => 'general/images/dEjySiIQZM6sqvjje7Bo.png', 'class' => 'col-md-6'],
                        'shape2' => ['type' => 'img', 'value' => 'general/images/3HG2tginvT0bVt1AvtI7.png', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'We Take Care Of Your <br/> Technology', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'GET IN TOUCH', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'get A Quote', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '/contact', 'class' => 'col-md-6', 'trans' => false],
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Nosotras cuidamos de tu <br/> tecnologia', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'PONERSE EN CONT', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'Consigue una', 'class' => 'col-md-6'],
                    ],
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => '1',
                'sort' => 18,
                'preview' => 'general/images/K3yWC4C4G1a0UP99Av3c.jpg',
                'created_at' => '2024-05-14 21:23:41',
                'updated_at' => null,
            ],
            [
                'id' => 29,
                'content_id' => null,
                'icon' => 'general/static/component/about2.png',
                'name' => 'About Pro',
                'section' => 'about_pro',
                'category' => 'about',
                'content' => json_encode([
                    'en' => [
                        'left_line' => ['type' => 'img', 'value' => 'general/images/JPe12TF8UksTbdahq9oH.png', 'class' => 'col-md-6'],
                        'big_image' => ['type' => 'img', 'value' => 'general/images/tuZ0L5S7Kf3griiHKqUo.jpg', 'class' => 'col-md-6'],
                        'image_2' => ['type' => 'img', 'value' => 'general/images/026c0zTV6YuJbyiSeQBD.png', 'class' => 'col-md-6'],
                        'circle' => ['type' => 'img', 'value' => 'general/images/XKYT20q6wQwMI6sQPiUK.png', 'class' => 'col-md-6'],
                        'title_icon' => ['type' => 'img', 'value' => 'general/images/Q9pkhd9i9u6hXzsgExKJ.png', 'class' => 'col-md-6'],
                        'right_item_icon' => ['type' => 'img', 'value' => 'general/images/tlFxE1YrRUZ21nx6TTqv.png', 'class' => 'col-md-6'],
                        'right_item_icon_2' => ['type' => 'img', 'value' => 'general/images/Talgs5tlMF1l0HptknWu.png', 'class' => 'col-md-6'],
                        'items_center_image' => ['type' => 'img', 'value' => 'general/images/bENZDZBhn8oYHOhsv9nY.png', 'class' => 'col-md-6'],
                        'video_popup_link' => ['type' => 'text', 'value' => 'https://www.youtube.com/watch?v=iVqz_4M5mA0', 'class' => 'col-md-12', 'trans' => false],
                        'heading' => ['type' => 'text', 'value' => 'We Strive to Offer Intelligent Business Solutions', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'ABOUT Gratech', 'class' => 'col-md-6'],
                        'summary' => ['type' => 'textarea', 'value' => 'Aonsectetur adipiscing elit aenean scelerisque augue vitae consequat aisque eget congue velit in cursus sodales the turpis euismod quis sapien euismod quis sapien the condimentum nec lorem nulla augue.', 'class' => 'col-md-12'],
                        'right_item_title' => ['type' => 'text', 'value' => 'Best Services', 'class' => 'col-md-6'],
                        'right_item_summary' => ['type' => 'text', 'value' => 'Scelerisque augue the consequat sodales', 'class' => 'col-md-6'],
                        'right_item_title_2' => ['type' => 'text', 'value' => '24/7 Call Support', 'class' => 'col-md-6'],
                        'right_item_summary_2' => ['type' => 'text', 'value' => 'Scelerisque augue the consequat sodales', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '/about', 'class' => 'col-md-6', 'trans' => false],
                        'button_title' => ['type' => 'text', 'value' => 'Explore More', 'class' => 'col-md-6'],
                        'items_center_title' => ['type' => 'text', 'value' => 'Ronald Richards', 'class' => 'col-md-6'],
                        'items_center_sub_title' => ['type' => 'text', 'value' => 'Co, Founder', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Nos esforzamos por ofrecer soluciones', 'class' => 'col-md-6'],
                        'sub_heading' => ['type' => 'text', 'value' => 'ACERCA DE Gratech', 'class' => 'col-md-6'],
                        'summary' => ['type' => 'textarea', 'value' => 'será seguido adipiscing elit aenean chocolate augue vitae consecutio esque essere tarea quiero unirme al curso ¿Cuál es la calidad del euismod? nadie conoce la salsa ni el sitio web.', 'class' => 'col-md-12'],
                        'right_item_title' => ['type' => 'text', 'value' => 'Mejores Servicios', 'class' => 'col-md-6'],
                        'right_item_summary' => ['type' => 'text', 'value' => 'Los chocolates promocionan a', 'class' => 'col-md-6'],
                        'right_item_title_2' => ['type' => 'text', 'value' => 'Soporte telefón', 'class' => 'col-md-6'],
                        'right_item_summary_2' => ['type' => 'text', 'value' => 'Los chocolates promocionan a los', 'class' => 'col-md-6'],
                        'button_title' => ['type' => 'text', 'value' => 'Explora más', 'class' => 'col-md-6'],
                        'items_center_title' => ['type' => 'text', 'value' => 'Ronald Richards', 'class' => 'col-md-6'],
                        'items_center_sub_title' => ['type' => 'text', 'value' => 'Co, Founder', 'class' => 'col-md-6'],
                    ],
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => '1',
                'sort' => 4,
                'preview' => 'general/images/ElGFEupkSbld6yviK7mk.jpg',
                'created_at' => '2024-05-14 22:36:11',
                'updated_at' => null,
            ],
            [
                'id' => 30,
                'content_id' => null,
                'icon' => 'general/static/component/service4.png',
                'name' => 'Service Slider',
                'section' => 'service_slider',
                'category' => 'service',
                'content' => json_encode([
                    "en" => [
                        "shape_left" => [
                            "type" => "img",
                            "value" => "general/images/tTSP041jTwBVmzFOZ3CL.png",
                            "class" => "col-md-6"
                        ],
                        "shape_right" => [
                            "type" => "img",
                            "value" => "general/images/qHd9xRHc2pEjSFnWlfWG.png",
                            "class" => "col-md-6"
                        ],
                        "sub_heading" => [
                            "type" => "text",
                            "value" => "Exclusive IT Services",
                            "class" => "col-md-6"
                        ],
                        "heading" => [
                            "type" => "text",
                            "value" => "SERVICES WE’RE OFFERING",
                            "class" => "col-md-6"
                        ],
                        "limit_summary" => [
                            "type" => "text",
                            "value" => "80",
                            "class" => "col-md-6",
                            "trans" => false
                        ],
                    ],
                    "es" => [
                        "sub_heading" => [
                            "type" => "text",
                            "value" => "Servicios TI exclusivos",
                            "class" => "col-md-6"
                        ],
                        "heading" => [
                            "type" => "text",
                            "value" => "SERVICIOS QUE OFRECEMOS",
                            "class" => "col-md-6"
                        ],
                    ],
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 0,
                'status' => 1,
                'sort' => 2,
                'preview' => 'general/images/C5H8rQknsGEvFGRsO8eK.jpg',
                'created_at' => '2024-05-14 21:27:08',
                'updated_at' => null,
            ],
            [
                'id' => 31,
                'content_id' => 3,
                'icon' => 'general/static/component/brand2.png',
                'name' => 'Brand Classic',
                'section' => 'brand_classic',
                'category' => 'brand',
                'content' => json_encode([
                    "en" => [
                        "shape" => [
                            "type" => "img",
                            "value" => "general/images/FllACBjyLdGWBdDkApJg.png",
                            "class" => "col-md-6"
                        ],
                    ],
                ]),
                'type' => 'static',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => 1,
                'sort' => 3,
                'preview' => 'general/images/9ZqHGlCPQ6e2ZuGCj5AB.jpg',
                'created_at' => '2024-05-11 06:57:15',
                'updated_at' => null,
            ],
            [
                'id' => 46,
                'content_id' => null,
                'icon' => 'general/images/DVgFqQoBhiLsl9f09YIG.png',
                'name' => 'Terms & Condition',
                'section' => 'dynamic',
                'category' => 'dynamic',
                'content' => $record46,
                'type' => 'dynamic',
                'content_fields' => '{"brand_logo":{"type":"img","class":"col-md-12"},"brand_name":{"type":"text","class":"col-md-12"}}',
                'with_modal' => 1,
                'status' => 1,
                'sort' => 60,
                'preview' => 'general/images/LE19XfA9e7mHDuhN69gH.jpg',
                'created_at' => '2024-04-24 22:48:50',
                'updated_at' => '2024-05-14 21:31:39',
            ],
            [
                'id' => 47,
                'content_id' => null,
                'icon' => 'general/images/OYYZdFs09xPJ2a31jMlP.png',
                'name' => 'Privacy Policy',
                'section' => 'dynamic',
                'category' => 'dynamic',
                'content' => json_encode([
                    "en" => "<h2>Privacy Policy</h2>\r\n\r\n<p style=\"font-size:16px;\"><br></p>\r\n\r\n<p style=\"font-size:16px;color:rgb(51,51,51);\">At <span class=\"highlight preview_website_name\">Website Name</span>, accessible at <span class=\"highlight preview_website_url\">Website.com</span>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by <span class=\"highlight preview_website_name\">Website Name</span> and how we use it.</p>\r\n\r\n<p style=\"font-size:16px;color:rgb(51,51,51);\">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at <span class=\"highlight preview_email_address\">Email@Website.com</span></p>\r\n\r\n<p style=\"font-size:16px;color:rgb(51,51,51);\">This privacy policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in <span class=\"highlight preview_website_name\">Website Name</span>. This policy is not applicable to any information collected offline or via channels other than this website.</p>",
                    "es" => "<h2>política de privacidad</h2>\r\n\r\n<p style=\"font-size:16px;\"><br></p>\r\n\r\n<p>En Website Name, accesible en Website.com, una de nuestras principales prioridades es la privacidad de nuestros visitantes. Este documento de Política de privacidad contiene tipos de información que se recopila y registra por nombre del sitio web y cómo la usamos.</p>\r\n\r\n<p><br></p>\r\n\r\n<p>Si tiene preguntas adicionales o requiere más información sobre nuestra Política de Privacidad, no dude en contactarnos a través del correo electrónico a Email@Website.com</p>\r\n\r\n<p><br></p>\r\n\r\n<p>Esta política de privacidad se aplica únicamente a nuestras actividades en línea y es válida para los visitantes de nuestro sitio web con respecto a la información que compartieron y/o recopilaron en Nombre del sitio web. Esta política no se aplica a ninguna información recopilada fuera de línea o a través de canales distintos de este sitio web.</p>"
                ]),
                'type' => 'dynamic',
                'content_fields' => null,
                'with_modal' => 1,
                'status' => 1,
                'sort' => 60,
                'preview' => 'general/images/amGRoyCNCChRmkRbj0WD.jpg',
                'created_at' => '2024-04-24 22:50:53',
                'updated_at' => '2024-05-14 21:32:08',
            ],

        ];

        foreach ($ComponentData as $data) {
            
            DB::table('page_components')->insert($data);
            //dump($data);
        }
    }

    public static function contentparser(){
        $record46 = `{\"en\":\"<h2>Terms and Conditions<\\/h2>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Welcome to\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span>!<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">These terms and conditions outline the rules and regulations for the use of\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\'s Website, located at\\u00a0<span class=\\\"highlight preview_website_url\\\">Website.com<\\/span>.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">By accessing this website we assume you accept these terms and conditions. Do not continue to use\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span>\\u00a0if you do not agree to take all of the terms and conditions stated on this page.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \\u201cClient\\u201d, \\u201cYou\\u201d and \\u201cYour\\u201d refers to you, the person log on this website and compliant to the Company\'s terms and conditions. \\u201cThe Company\\u201d, \\u201cOurselves\\u201d, \\u201cWe\\u201d, \\u201cOur\\u201d and \\u201cUs\\u201d, refers to our Company. \\u201cParty\\u201d, \\u201cParties\\u201d, or \\u201cUs\\u201d, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client\'s needs in respect of provision of the Company\'s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and\\/or he\\/she or they, are taken as interchangeable and therefore as referring to same.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Cookies<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We employ the use of cookies. By accessing\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span>, you agreed to use cookies in agreement with the\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\'s Privacy Policy.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Most interactive websites use cookies to let us retrieve the user\'s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate\\/advertising partners may also use cookies.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>License<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Unless otherwise stated,\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\\u00a0and\\/or its licensors own the intellectual property rights for all material on\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span>. All intellectual property rights are reserved. You may access this from\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span>\\u00a0for your own personal use subjected to restrictions set in these terms and conditions.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">You must not:<\\/p>\\r\\n\\r\\n<ul><li>Republish material from\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span><\\/li><li>Sell, rent or sub-license material from\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span><\\/li><li>Reproduce, duplicate or copy material from\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span><\\/li><li>Redistribute content from\\u00a0<span class=\\\"highlight preview_website_name\\\">Website Name<\\/span><\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">This Agreement shall begin on the date hereof.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website.\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\\u00a0does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>,its agents and\\/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws,\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\\u00a0shall not be liable for the Comments or for any liability, damages or expenses caused and\\/or suffered as a result of any use of and\\/or posting of and\\/or appearance of the Comments on this website.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\\u00a0reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">You warrant and represent that:<\\/p>\\r\\n\\r\\n<ul><li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;<\\/li><li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;<\\/li><li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy<\\/li><li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">You hereby grant\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\\u00a0a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Hyperlinking to our Content<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">The following organizations may link to our Website without prior written approval:<\\/p>\\r\\n\\r\\n<ul><li>Government agencies;<\\/li><li>Search engines;<\\/li><li>News organizations;<\\/li><li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and<\\/li><li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and\\/or services; and (c) fits within the context of the linking party\'s site.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We may consider and approve other link requests from the following types of organizations:<\\/p>\\r\\n\\r\\n<ul><li>commonly-known consumer and\\/or business information sources;<\\/li><li>dot.com community sites;<\\/li><li>associations or other groups representing charities;<\\/li><li>online directory distributors;<\\/li><li>internet portals;<\\/li><li>accounting, law and consulting firms; and<\\/li><li>educational institutions and trade associations.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>; and (d) the link is in the context of general resource information.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party\'s site.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Approved organizations may hyperlink to our Website as follows:<\\/p>\\r\\n\\r\\n<ul><li>By use of our corporate name; or<\\/li><li>By use of the uniform resource locator being linked to; or<\\/li><li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party\'s site.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">No use of\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\'s logo or other artwork will be allowed for linking absent a trademark license agreement.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>iFrames<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Content Liability<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Reservation of Rights<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it\'s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Removal of links from our website<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Disclaimer<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:<\\/p>\\r\\n\\r\\n<ul><li>limit or exclude our or your liability for death or personal injury;<\\/li><li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;<\\/li><li>limit any of our or your liabilities in any way that is not permitted under applicable law; or<\\/li><li>exclude any of our or your liabilities that may not be excluded under applicable law.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.<\\/p>\",\"es\":\"<h2>T\\u00e9rminos y condiciones<\\/h2>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">\\u00a1Bienvenido al nombre del sitio web!<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Estos t\\u00e9rminos y condiciones describen las reglas y regulaciones para el uso del sitio web de Company Name, ubicado en Website.com.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Al acceder a este sitio web asumimos que acepta estos t\\u00e9rminos y condiciones. No contin\\u00fae utilizando el nombre del sitio web si no acepta todos los t\\u00e9rminos y condiciones establecidos en esta p\\u00e1gina.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">La siguiente terminolog\\u00eda se aplica a estos T\\u00e9rminos y condiciones, Declaraci\\u00f3n de privacidad y Aviso de exenci\\u00f3n de responsabilidad y a todos los Acuerdos: \\\"Cliente\\\", \\\"Usted\\\" y \\\"Su\\\" se refieren a usted, la persona que inicia sesi\\u00f3n en este sitio web y cumple con los t\\u00e9rminos y condiciones de la Compa\\u00f1\\u00eda. \\u201cLa Compa\\u00f1\\u00eda\\u201d, \\u201cNosotros\\u201d, \\u201cNosotros\\u201d, \\u201cNuestro\\u201d y \\u201cNos\\u201d, se refiere a nuestra Compa\\u00f1\\u00eda. \\u201cParte\\u201d, \\u201cPartes\\u201d o \\u201cNosotros\\u201d se refieren tanto al Cliente como a nosotros mismos. Todos los t\\u00e9rminos se refieren a la oferta, aceptaci\\u00f3n y consideraci\\u00f3n del pago necesario para llevar a cabo el proceso de nuestra asistencia al Cliente de la manera m\\u00e1s adecuada con el prop\\u00f3sito expreso de satisfacer las necesidades del Cliente con respecto a la prestaci\\u00f3n de los servicios indicados por la Compa\\u00f1\\u00eda, de acuerdo con y sujeto a la legislaci\\u00f3n vigente en los Pa\\u00edses Bajos. Cualquier uso de la terminolog\\u00eda anterior u otras palabras en singular, plural, may\\u00fasculas y\\/o \\u00e9l\\/ella o ellos, se consideran intercambiables y por lo tanto se refieren a las mismas.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Galletas<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Empleamos el uso de cookies. Al acceder al Nombre del sitio web, acepta utilizar cookies de acuerdo con la Pol\\u00edtica de privacidad del Nombre de la empresa.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">La mayor\\u00eda de los sitios web interactivos utilizan cookies para permitirnos recuperar los detalles del usuario en cada visita. Nuestro sitio web utiliza cookies para habilitar la funcionalidad de ciertas \\u00e1reas para que sea m\\u00e1s f\\u00e1cil para las personas que visitan nuestro sitio web. Algunos de nuestros socios afiliados\\/publicitarios tambi\\u00e9n pueden utilizar cookies.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Licencia<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">A menos que se indique lo contrario, Nombre de la empresa y\\/o sus licenciantes poseen los derechos de propiedad intelectual de todo el material en Nombre del sitio web. Todos los derechos de propiedad intelectual est\\u00e1n reservados. Puede acceder a esto desde Nombre del sitio web para su uso personal sujeto a las restricciones establecidas en estos t\\u00e9rminos y condiciones.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">No debes:<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Volver a publicar material desde el nombre del sitio web<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Vender, alquilar o sublicenciar material del nombre del sitio web<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Reproducir, duplicar o copiar material del nombre del sitio web<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Redistribuir contenido desde el nombre del sitio web<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Este Acuerdo comenzar\\u00e1 en la fecha del presente.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Partes de este sitio web ofrecen a los usuarios la oportunidad de publicar e intercambiar opiniones e informaci\\u00f3n en determinadas \\u00e1reas del sitio web. Nombre de la empresa no filtra, edita, publica ni revisa los comentarios antes de su presencia en el sitio web. Los comentarios no reflejan los puntos de vista ni las opiniones de Nombre de la empresa, sus agentes y\\/o afiliados. Los comentarios reflejan los puntos de vista y opiniones de la persona que publica sus puntos de vista y opiniones. En la medida permitida por las leyes aplicables, Nombre de la Compa\\u00f1\\u00eda no ser\\u00e1 responsable de los Comentarios ni de ninguna responsabilidad, da\\u00f1os o gastos causados y\\/o sufridos como resultado de cualquier uso, publicaci\\u00f3n y\\/o aparici\\u00f3n de los Comentarios en este sitio web.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Nombre de la empresa se reserva el derecho de monitorear todos los Comentarios y eliminar cualquier Comentario que pueda considerarse inapropiado, ofensivo o que infrinja estos T\\u00e9rminos y condiciones.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Usted garantiza y declara que:<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Tiene derecho a publicar Comentarios en nuestro sitio web y tiene todas las licencias y consentimientos necesarios para hacerlo;<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Los Comentarios no invaden ning\\u00fan derecho de propiedad intelectual, incluidos, entre otros, derechos de autor, patentes o marcas comerciales de terceros;<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Los Comentarios no contienen ning\\u00fan material difamatorio, calumnioso, ofensivo, indecente o ilegal que sea una invasi\\u00f3n de la privacidad.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Los Comentarios no se utilizar\\u00e1n para solicitar o promover negocios o costumbres o presentar actividades comerciales o actividades ilegales.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Por la presente, otorga a Nombre de la empresa una licencia no exclusiva para usar, reproducir, editar y autorizar a otros a usar, reproducir y editar cualquiera de sus Comentarios en todas y cada una de las formas, formatos o medios.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Hyperlinking to our Content<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">The following organizations may link to our Website without prior written approval:<\\/p>\\r\\n\\r\\n<ul><li>Government agencies;<\\/li><li>Search engines;<\\/li><li>News organizations;<\\/li><li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and<\\/li><li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and\\/or services; and (c) fits within the context of the linking party\'s site.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We may consider and approve other link requests from the following types of organizations:<\\/p>\\r\\n\\r\\n<ul><li>commonly-known consumer and\\/or business information sources;<\\/li><li>dot.com community sites;<\\/li><li>associations or other groups representing charities;<\\/li><li>online directory distributors;<\\/li><li>internet portals;<\\/li><li>accounting, law and consulting firms; and<\\/li><li>educational institutions and trade associations.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>; and (d) the link is in the context of general resource information.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party\'s site.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.<\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Approved organizations may hyperlink to our Website as follows:<\\/p>\\r\\n\\r\\n<ul><li>By use of our corporate name; or<\\/li><li>By use of the uniform resource locator being linked to; or<\\/li><li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party\'s site.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">No use of\\u00a0<span class=\\\"highlight preview_company_name\\\">Company Name<\\/span>\'s logo or other artwork will be allowed for linking absent a trademark license agreement.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>marcos<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Sin aprobaci\\u00f3n previa y permiso por escrito, no puede crear marcos alrededor de nuestras p\\u00e1ginas web que alteren de alguna manera la presentaci\\u00f3n visual o la apariencia de nuestro sitio web.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Content Liability<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">No seremos responsables de ning\\u00fan contenido que aparezca en su sitio web. Usted acepta protegernos y defendernos contra todos los reclamos que surjan en su sitio web. No deben aparecer enlaces en ning\\u00fan sitio web que puedan interpretarse como difamatorios, obscenos o criminales, o que infrinjan, violen de otro modo o defiendan la infracci\\u00f3n u otra violaci\\u00f3n de derechos de terceros.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Reserva de Derechos<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">Nos reservamos el derecho de solicitarle que elimine todos los enlaces o cualquier enlace en particular a nuestro sitio web. Usted aprueba eliminar inmediatamente todos los enlaces a nuestro sitio web si as\\u00ed lo solicita. Tambi\\u00e9n nos reservamos el derecho de modificar estos t\\u00e9rminos y condiciones y su pol\\u00edtica de vinculaci\\u00f3n en cualquier momento. Al vincularse continuamente a nuestro sitio web, usted acepta estar sujeto y seguir estos t\\u00e9rminos y condiciones de vinculaci\\u00f3n.<\\/p>\\r\\n\\r\\n<h3><br><\\/h3>\\r\\n\\r\\n<h3>Eliminaci\\u00f3n de enlaces de nuestro sitio web<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Si encuentra alg\\u00fan enlace en nuestro sitio web que sea ofensivo por cualquier motivo, puede contactarnos e informarnos en cualquier momento. Consideraremos las solicitudes para eliminar enlaces, pero no estamos obligados a hacerlo ni a responderle directamente.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">No garantizamos que la informaci\\u00f3n de este sitio web sea correcta, no garantizamos su integridad o exactitud; Tampoco prometemos garantizar que el sitio web permanezca disponible o que el material del sitio web se mantenga actualizado.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<h3>Descargo de responsabilidad<\\/h3>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"font-size:16px;text-align:justify;\\\">En la medida m\\u00e1xima permitida por la ley aplicable, excluimos todas las representaciones, garant\\u00edas y condiciones relacionadas con nuestro sitio web y el uso de este sitio web. Nada en este descargo de responsabilidad:<\\/p>\\r\\n\\r\\n<ul><li>limitar o excluir nuestra o su responsabilidad por muerte o lesiones personales;<\\/li><li>limitar o excluir nuestra o su responsabilidad por fraude o tergiversaci\\u00f3n fraudulenta;<\\/li><li>limitar cualquiera de nuestras responsabilidades o las suyas de cualquier forma que no est\\u00e9 permitida por la ley aplicable; o<\\/li><li>excluir cualquiera de nuestras responsabilidades o las suyas que no puedan estar excluidas seg\\u00fan la ley aplicable.<\\/li><\\/ul>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Las limitaciones y prohibiciones de responsabilidad establecidas en esta Secci\\u00f3n y en otras partes de este descargo de responsabilidad: (a) est\\u00e1n sujetas al p\\u00e1rrafo anterior; y (b) regir todas las responsabilidades que surjan bajo la exenci\\u00f3n de responsabilidad, incluidas las responsabilidades que surjan en el contrato, en agravio y por incumplimiento del deber legal.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\"><br><\\/p>\\r\\n\\r\\n<p style=\\\"text-align:justify;\\\">Siempre que el sitio web y la informaci\\u00f3n y los servicios del sitio web se proporcionen de forma gratuita, no seremos responsables de ninguna p\\u00e9rdida o da\\u00f1o de cualquier naturaleza.<\\/p>\"}`;
    }
}
