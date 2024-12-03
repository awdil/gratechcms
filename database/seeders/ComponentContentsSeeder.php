<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ComponentContentsSeeder extends Seeder
{
    public function run()
    {
        $ComponentData=[
            [
                'id' => 6,
                'component_id' => 3,
                'content' => json_encode([
                    'en' => [
                        'brand_logo' => ['type' => 'img', 'value' => 'general/images/upoGdntckh8ZtLUlAIN2.png', 'class' => 'col-md-12'],
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media', 'class' => 'col-md-12'],
                    ],
                    'ar' => [
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media', 'class' => 'col-md-12'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-07 11:21:26'),
                'updated_at' => Carbon::parse('2024-04-25 05:22:46'),
            ],
            [
                'id' => 7,
                'component_id' => 3,
                'content' => json_encode([
                    'en' => [
                        'brand_logo' => ['type' => 'img', 'value' => 'general/images/vidbGI39BBuJVebItW1S.png', 'class' => 'col-md-12'],
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 2', 'class' => 'col-md-12'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-07 11:22:17'),
                'updated_at' => Carbon::parse('2024-03-07 11:22:17'),
            ],
            [
                'id' => 8,
                'component_id' => 3,
                'content' => json_encode([
                    'en' => [
                        'brand_logo' => ['type' => 'img', 'value' => 'general/images/YkDnsQQgjVG4tykjsvar.png', 'class' => 'col-md-12'],
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 3', 'class' => 'col-md-12'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-07 11:22:30'),
                'updated_at' => Carbon::parse('2024-03-07 11:22:30'),
            ],
            [
                'id' => 9,
                'component_id' => 3,
                'content' => json_encode([
                    'en' => [
                        'brand_logo' => ['type' => 'img', 'value' => 'general/images/psyzb9ti8Z5EgGm4K4H4.png', 'class' => 'col-md-12'],
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 4', 'class' => 'col-md-12'],
                    ],
                    'ar' => [
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 4', 'class' => 'col-md-12'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-07 11:22:40'),
                'updated_at' => Carbon::parse('2024-04-25 10:59:27'),
            ],
            [
                'id' => 10,
                'component_id' => 3,
                'content' => json_encode([
                    'en' => [
                        'brand_logo' => ['type' => 'img', 'value' => 'general/images/U2JnNjoxChEpYtBNY4tj.png', 'class' => 'col-md-12'],
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 4', 'class' => 'col-md-12'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-07 11:22:48'),
                'updated_at' => Carbon::parse('2024-03-07 11:22:48'),
            ],
            [
                'id' => 11,
                'component_id' => 5,
                'content' => json_encode([
                    'en' => [
                        'icon' => ['type' => 'img', 'value' => 'general/images/ETP5udJr7yH1P3J0fAr1.png', 'class' => 'col-md-12'],
                        'counter' => ['type' => 'text', 'value' => '6,561', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Satisfied Clients', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'counter' => ['type' => 'text', 'value' => '6,561', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Clientas satisfechas', 'class' => 'col-md-6'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-09 22:48:50'),
                'updated_at' => Carbon::parse('2024-05-14 11:02:45'),
            ],
            [
                'id' => 12,
                'component_id' => 5,
                'content' => json_encode([
                    'en' => [
                        'icon' => ['type' => 'img', 'value' => 'general/images/8MUE9rfNP2etAZJ3WEEw.png', 'class' => 'col-md-12'],
                        'counter' => ['type' => 'text', 'value' => '600', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Finished Projects', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'counter' => ['type' => 'text', 'value' => '600', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Proyectos terminados', 'class' => 'col-md-6'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-09 22:49:26'),
                'updated_at' => Carbon::parse('2024-05-14 11:03:05'),
            ],
            [
                'id' => 13,
                'component_id' => 5,
                'content' => json_encode([
                    'en' => [
                        'icon' => ['type' => 'img', 'value' => 'general/images/I2wgI8VIUcinhY4aMzPf.png', 'class' => 'col-md-12'],
                        'counter' => ['type' => 'text', 'value' => '250', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Skilled Experts', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'counter' => ['type' => 'text', 'value' => '250', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Expertas calificadas', 'class' => 'col-md-6'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-09 22:49:49'),
                'updated_at' => Carbon::parse('2024-05-14 11:03:24'),
            ],
            [
                'id' => 14,
                'component_id' => 5,
                'content' => json_encode([
                    'en' => [
                        'icon' => ['type' => 'img', 'value' => 'general/images/ZXTeT8rvVoyRWhQginA0.png', 'class' => 'col-md-12'],
                        'counter' => ['type' => 'text', 'value' => '590', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Media Posts', 'class' => 'col-md-6'],
                    ],
                    'es' => [
                        'counter' => ['type' => 'text', 'value' => '590', 'class' => 'col-md-6'],
                        'title' => ['type' => 'text', 'value' => 'Publicaciones en', 'class' => 'col-md-6'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-09 22:50:13'),
                'updated_at' => Carbon::parse('2024-05-14 11:03:46'),
            ],
            [
                'id' => 15,
                'component_id' => 3,
                'content' => json_encode([
                    'en' => [
                        'brand_logo' => ['type' => 'img', 'value' => 'general/images/sv9aH8Q3k4oRzIMcb8f8.png', 'class' => 'col-md-12'],
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 5', 'class' => 'col-md-12'],
                    ],
                    'es' => [
                        'brand_name' => ['type' => 'text', 'value' => 'Tech Media 5', 'class' => 'col-md-12'],
                    ],
                ]),
                'created_at' => Carbon::parse('2024-03-09 22:50:34'),
                'updated_at' => Carbon::parse('2024-05-14 11:04:03'),
            ],
            [
                'id' => 34,
                'component_id' => 6,
                'content' => json_encode([
                    'en' => [
                        'cover_image' => ['type' => 'img', 'value' => 'general/images/oSA8B1Af2KaVxDWOyg2b.jpg', 'class' => 'col-md-6'],
                        'details_image' => ['type' => 'img', 'value' => 'general/images/LxFBuuwsPYqJDUOkE3no.jpg', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Platform Integration', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Nulla faucibus malesuada. In placerat feugiat eros ac tempor. Integer euismod massa sapien, et consequat enim laoreet et. Nulla sit amet nisi dapibus, gravida turpis sit amet, accumsan nisl. Fusce vel semper risus. Morbi congue eros sagittis, sodales turpis venenatis, iaculis dui. Proin ac purus sed nibh dapibus neque. scelerisque sed quis ante. Suspendisse potenti. Mauris vitae sagittis diam. Vivamus imperdiet nulla ut nisi fermentum, vitae euismod mi egestas. In quis auctor magna. Maecenas sodales nunc tellus, non iaculis est iaculis placerat. Morbi suscipit,', 'class' => 'col-md-12'],
                        'completed_date' => ['type' => 'date', 'value' => '2024-03-13', 'class' => 'col-md-6', 'trans' => false],
                        'category' => ['type' => 'text', 'value' => 'Technology', 'class' => 'col-md-6'],
                        'client' => ['type' => 'text', 'value' => 'Robert Fox', 'class' => 'col-md-6'],
                        'location' => ['type' => 'text', 'value' => 'fot kde, USA', 'class' => 'col-md-6'],
                        'details' => ['type' => 'rich_text', 'value' => '<h3>Our Challenge</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci malesuada sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum mauris id nunc molestie, ac tincidunt erat gravida. Nullam dui libero, mollis ac quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue. Proin id volutpat massa. Vivamus tincidunt nunc justo, ac aliquam ex molestie id.</p><div class="case-challenge-list mt-30"><ul class="case-challenge"><li class="mb-3">Technology Consultancy</li><li>Maintenance And Support</li></ul><ul class="case-challenge"><li class="mb-3">We Provide best services</li><li>Requirements Gathering</li></ul><ul class="case-challenge"><li class="mb-3">Maintenance And Support</li><li>Technology Consultancy</li></ul></div><h3><br></h3><h3>Project Overview</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci malesuada sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum mauris id nunc molestie, ac tincidunt erat gravida. Nullam dui libero, mollis ac quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue. Proin id volutpat massa. Vivamus tincidunt nunc justo, ac aliquam ex molestie id.</p>', 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Integración de plataforma', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'No se esperaba ningún sabor. Invierte tiempo y dinero. Entero Euismod masa sapien, et consequat enim laoreet et No hay nada de qué preocuparse excepto por las proteínas, es muy importante quedar embarazada. Sonríe o ríe siempre. Morbi tarea eros sagittis, miembros de los turpis venenosos, flechas del diablo. Proteína y pura, pero ni proteína ni proteína. chocolate pero quien antes Posible suspensión. Las flechas de la vida de Maurice diam. No hay financiación para mi vida, salvo el fermento, las necesidades euismod de mi vida. Un gran autor. Mecenas es ahora un miembro del país, no el objetivo. sospecha de enfermedad', 'class' => 'col-md-12'],
                        'category' => ['type' => 'text', 'value' => 'Tecnología', 'class' => 'col-md-6'],
                        'client' => ['type' => 'text', 'value' => 'Roberto Fox', 'class' => 'col-md-6'],
                        'location' => ['type' => 'text', 'value' => 'para kde, EE. UU.', 'class' => 'col-md-6'],
                        'details' => ['type' => 'rich_text', 'value' => '<h3>Nuestro desafío</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Los niños necesitan una URL simple. El barco está en excelentes condiciones como se esperaba para recibir atención médica. Aenean faucibus scelerisque convallis. De vez en cuando la empleada se sorprendía y la promotora estaba embarazada. Ningún dios libre, suave y cómo y, tincidun veneciano cómo. De hecho, ni siquiera es un viaje de fin de semana, pero la aerolínea lo anuncia. Es una masa de verduras ese fin de semana. Ahora los desarrolladores están vivos y algunos de los empleados también.</p><div class="case-challenge-list mt-30"><ul class="case-challenge"><li class="mb-3">Consultoría Tecnológica</li><li class="mb-3">Mantenimiento y soporte</li><li class="mb-3">Brindamos los mejores servicios</li><li class="mb-3">Recopilación de requisitos</li><li class="mb-3">Mantenimiento y soporte</li><li class="mb-3">Consultoría Tecnológica</li></ul></div><h3><br></h3><h3>Descripción del proyecto</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Los niños necesitan una URL simple. El barco está en excelentes condiciones como se esperaba para recibir atención médica. Aenean faucibus scelerisque convallis. De vez en cuando la empleada se sorprendía y la promotora estaba embarazada. Ningún dios libre, suave y cómo y, tincidun veneciano cómo. De hecho, ni siquiera es un viaje de fin de semana, pero la aerolínea lo anuncia. Es una masa de verduras ese fin de semana. Ahora los desarrolladores están vivos y algunos de los empleados también.</p>', 'class' => 'col-md-12']
                    ]
                ]),
                'created_at' => '2024-03-13 05:13:45',
                'updated_at' => '2024-05-14 19:28:24'
            ],
            [
                'id' => 35,
                'component_id' => 6,
                'content' => json_encode([
                    'en' => [
                        'cover_image' => ['type' => 'img', 'value' => 'general/images/qKb99H31py4X7Nwlv2Ot.jpg', 'class' => 'col-md-6'],
                        'details_image' => ['type' => 'img', 'value' => 'general/images/Oy6XHJvB5yjHZcKrRvbc.jpg', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Network Security', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Nulla faucibus malesuada. In placerat feugiat eros ac tempor. Integer euismod massa sapien, et consequat enim laoreet et. Nulla sit amet nisi dapibus, gravida turpis sit amet, accumsan nisl. Fusce vel semper risus. Morbi congue eros sagittis, sodales turpis venenatis, iaculis dui. Proin ac purus sed nibh dapibus neque. scelerisque sed quis ante. Suspendisse potenti. Mauris vitae sagittis diam. Vivamus imperdiet nulla ut nisi fermentum, vitae euismod mi egestas. In quis auctor magna. Maecenas sodales nunc tellus, non iaculis est iaculis placerat. Morbi suscipit,', 'class' => 'col-md-12'],
                        'completed_date' => ['type' => 'date', 'value' => '2024-03-13', 'class' => 'col-md-6', 'trans' => false],
                        'category' => ['type' => 'text', 'value' => 'Cybersecurity', 'class' => 'col-md-6'],
                        'client' => ['type' => 'text', 'value' => 'Sophie Scott', 'class' => 'col-md-6'],
                        'location' => ['type' => 'text', 'value' => 'Port Clyde, USA', 'class' => 'col-md-6'],
                        'details' => ['type' => 'rich_text', 'value' => '<h3>Our Challenge</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci malesuada sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum mauris id nunc molestie, ac tincidunt erat gravida. Nullam dui libero, mollis ac quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue. Proin id volutpat massa. Vivamus tincidunt nunc justo, ac aliquam ex molestie id.</p><div class="case-challenge-list mt-30"><ul class="case-challenge"><li class="mb-3">Consulting on Cybersecurity</li><li class="mb-3">Maintenance and Support</li></ul></div><h3><br></h3><h3>Project Overview</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci malesuada sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum mauris id nunc molestie, ac tincidunt erat gravida. Nullam dui libero, mollis ac quam et, venenatis tincidunt quam. Proin nec volutpat ligula, id porttitor augue. Proin id volutpat massa. Vivamus tincidunt nunc justo, ac aliquam ex molestie id.</p>', 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Seguridad de Red', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'No se esperaba ningún sabor. Invierte tiempo y dinero. Entero Euismod masa sapien, et consequat enim laoreet et No hay nada de qué preocuparse excepto por las proteínas, es muy importante quedar embarazada. Sonríe o ríe siempre. Morbi tarea eros sagittis, miembros de los turpis venenosos, flechas del diablo. Proteína y pura, pero ni proteína ni proteína. chocolate pero quien antes Posible suspensión. Las flechas de la vida de Maurice diam. No hay financiación para mi vida, salvo el fermento, las necesidades euismod de mi vida. Un gran autor. Mecenas es ahora un miembro del país, no el objetivo. sospecha de enfermedad', 'class' => 'col-md-12'],
                        'category' => ['type' => 'text', 'value' => 'Ciberseguridad', 'class' => 'col-md-6'],
                        'client' => ['type' => 'text', 'value' => 'Sofía Scott', 'class' => 'col-md-6'],
                        'location' => ['type' => 'text', 'value' => 'Port Clyde, EE. UU.', 'class' => 'col-md-6'],
                        'details' => ['type' => 'rich_text', 'value' => '<h3>Reto que enfrentamos</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Los niños necesitan una URL simple. El barco está en excelentes condiciones como se esperaba para recibir atención médica. Aenean faucibus scelerisque convallis. De vez en cuando la empleada se sorprendía y la promotora estaba embarazada. Ningún dios libre, suave y cómo y, tincidun veneciano cómo. De hecho, ni siquiera es un viaje de fin de semana, pero la aerolínea lo anuncia. Es una masa de verduras ese fin de semana. Ahora los desarrolladores están vivos y algunos de los empleados también.</p><div class="case-challenge-list mt-30"><ul class="case-challenge"><li class="mb-3">Consultoría en Ciberseguridad</li><li class="mb-3">Mantenimiento y soporte</li></ul></div><h3><br></h3><h3>Descripción del proyecto</h3><p style="font-size:16px;color:rgb(88,88,88);"><br></p><p style="font-size:16px;color:rgb(88,88,88);">Los niños necesitan una URL simple. El barco está en excelentes condiciones como se esperaba para recibir atención médica. Aenean faucibus scelerisque convallis. De vez en cuando la empleada se sorprendía y la promotora estaba embarazada. Ningún dios libre, suave y cómo y, tincidun veneciano cómo. De hecho, ni siquiera es un viaje de fin de semana, pero la aerolínea lo anuncia. Es una masa de verduras ese fin de semana. Ahora los desarrolladores están vivos y algunos de los empleados también.</p>', 'class' => 'col-md-12']
                    ]
                ]),
                'created_at' => '2024-03-13 05:13:45',
                'updated_at' => '2024-05-14 19:28:24'
            ],
            [
                'id' => 36,
                'component_id' => 6,
                'content' => json_encode([
                    'en' => [
                        'cover_image' => ['type' => 'img', 'value' => 'general/images/0VxOqOHrc2sY1CgUQu0U.jpg', 'class' => 'col-md-6'],
                        'details_image' => ['type' => 'img', 'value' => 'general/images/XCvMFuJ3V3t2v9RWlexo.jpg', 'class' => 'col-md-6'],
                        'heading' => ['type' => 'text', 'value' => 'Web Development', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'Nulla faucibus malesuada...', 'class' => 'col-md-12'],
                        'completed_date' => ['type' => 'date', 'value' => '2024-03-13', 'class' => 'col-md-6', 'trans' => false],
                        'category' => ['type' => 'text', 'value' => 'Solution', 'class' => 'col-md-6'],
                        'client' => ['type' => 'text', 'value' => 'Robert Fox', 'class' => 'col-md-6'],
                        'location' => ['type' => 'text', 'value' => 'fot kde, USA', 'class' => 'col-md-6'],
                        'details' => ['type' => 'rich_text', 'value' => '<h3>Our Challenge</h3><p>... </p>', 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'heading' => ['type' => 'text', 'value' => 'Desarrollo web', 'class' => 'col-md-12'],
                        'summary' => ['type' => 'textarea', 'value' => 'No se esperaba...', 'class' => 'col-md-12'],
                        'category' => ['type' => 'text', 'value' => 'Solución', 'class' => 'col-md-6'],
                        'client' => ['type' => 'text', 'value' => 'Robert Fox', 'class' => 'col-md-6'],
                        'location' => ['type' => 'text', 'value' => 'fot kde, USA', 'class' => 'col-md-6'],
                        'details' => ['type' => 'rich_text', 'value' => '<h3>Nuestro desafío</h3><p>...</p>', 'class' => 'col-md-12']
                    ]
                ]),
                'created_at' => '2024-03-13 05:13:45',
                'updated_at' => '2024-05-14 19:47:58'
            ],
            [
                'id' => 39,
                'component_id' => 8,
                'content' => json_encode([
                    'en' => [
                        'plan_shape' => ['type' => 'img', 'value' => 'general/images/ry8sfPQzETBWsELDO8tq.png', 'class' => 'col-md-6'],
                        'plan_icon' => ['type' => 'img', 'value' => 'general/images/471fmTeH0V5mO4PYh25e.png', 'class' => 'col-md-6'],
                        'name' => ['type' => 'text', 'value' => 'Basic Plan', 'class' => 'col-md-6'],
                        'price' => ['type' => 'text', 'value' => '$39', 'class' => 'col-md-6'],
                        'duration' => ['type' => 'text', 'value' => 'Monthly', 'class' => 'col-md-6'],
                        'feature_1' => ['type' => 'text', 'value' => 'Free 1 5 GB Linux Hosting', 'class' => 'col-md-6'],
                        'feature_2' => ['type' => 'text', 'value' => 'Dedicated Tech Experts', 'class' => 'col-md-6'],
                        'feature_3' => ['type' => 'text', 'value' => '24/7 System Monitoring', 'class' => 'col-md-6'],
                        'feature_4' => ['type' => 'text', 'value' => 'Security Management', 'class' => 'col-md-6'],
                        'feature_5' => ['type' => 'text', 'value' => 'Unlimited Download', 'class' => 'col-md-6'],
                        'button_name' => ['type' => 'text', 'value' => 'choose Plan', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '/contact', 'class' => 'col-md-6']
                    ],
                    'es' => [
                        'name' => ['type' => 'text', 'value' => 'Plan Básico', 'class' => 'col-md-6'],
                        'price' => ['type' => 'text', 'value' => '$39', 'class' => 'col-md-6'],
                        'duration' => ['type' => 'text', 'value' => 'Mensual', 'class' => 'col-md-6'],
                        'feature_1' => ['type' => 'text', 'value' => 'Alojamiento Linux 1 5 GB gratis', 'class' => 'col-md-6'],
                        'feature_2' => ['type' => 'text', 'value' => 'Expertos técnicos dedicados', 'class' => 'col-md-6'],
                        'feature_3' => ['type' => 'text', 'value' => 'Monitoreo 24/7', 'class' => 'col-md-6'],
                        'feature_4' => ['type' => 'text', 'value' => 'Gestión de seguridad', 'class' => 'col-md-6'],
                        'feature_5' => ['type' => 'text', 'value' => 'Descargas ilimitadas', 'class' => 'col-md-6'],
                        'button_name' => ['type' => 'text', 'value' => 'elegir Plan', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '/contacto', 'class' => 'col-md-6']
                    ]
                ]),
                'created_at' => '2024-03-13 05:13:45',
                'updated_at' => '2024-05-14 19:47:58'
            ],
             [
                'id' => 40,
                'component_id' => 8,
                'content' => json_encode([
                    'en' => [
                        'plan_shape' => ['type' => 'img', 'value' => 'general/images/q9w0hWGWA6xyEbi5avyw.png', 'class' => 'col-md-6'],
                        'plan_icon' => ['type' => 'img', 'value' => 'general/images/V548oCczTjtTOrBqs7m5.png', 'class' => 'col-md-6'],
                        'name' => ['type' => 'text', 'value' => 'Standard Plan', 'class' => 'col-md-6'],
                        'price' => ['type' => 'text', 'value' => '$59', 'class' => 'col-md-6'],
                        'duration' => ['type' => 'text', 'value' => 'monthly', 'class' => 'col-md-6'],
                        'feature_1' => ['type' => 'text', 'value' => 'Free 1 5 GB Linux Hosting', 'class' => 'col-md-6'],
                        'feature_2' => ['type' => 'text', 'value' => 'Dedicated Tech Experts', 'class' => 'col-md-6'],
                        'feature_3' => ['type' => 'text', 'value' => '24/7 System Monitoring', 'class' => 'col-md-6'],
                        'feature_4' => ['type' => 'text', 'value' => 'Security Management', 'class' => 'col-md-6'],
                        'feature_5' => ['type' => 'text', 'value' => 'Unlimited Download', 'class' => 'col-md-6'],
                        'button_name' => ['type' => 'text', 'value' => 'choose Plan', 'class' => 'col-md-6'],
                        'button_link' => ['type' => 'text', 'value' => '/contact', 'class' => 'col-md-6']
                    ],
                    'es' => [
                        'name' => ['type' => 'text', 'value' => 'Plan estándar', 'class' => 'col-md-6'],
                        'price' => ['type' => 'text', 'value' => '$59', 'class' => 'col-md-6'],
                        'duration' => ['type' => 'text', 'value' => 'mensual', 'class' => 'col-md-6'],
                        'feature_1' => ['type' => 'text', 'value' => 'Alojamiento Linux gratuito de 1 5 GB', 'class' => 'col-md-6'],
                        'feature_2' => ['type' => 'text', 'value' => 'Expertos tecnológicos dedicados', 'class' => 'col-md-6'],
                        'feature_3' => ['type' => 'text', 'value' => '24 horas al día, 7 días a la semana', 'class' => 'col-md-6'],
                        'feature_4' => ['type' => 'text', 'value' => 'Gestión de seguridad', 'class' => 'col-md-6'],
                        'feature_5' => ['type' => 'text', 'value' => 'Descarga ilimitada', 'class' => 'col-md-6'],
                        'button_name' => ['type' => 'text', 'value' => 'elegir plan', 'class' => 'col-md-6']
                    ]
                ]),
                'created_at' => '2024-03-13 10:54:38',
                'updated_at' => '2024-05-17 04:41:56'
            ],
            [
                'id' => 41,
                'component_id' => 8,
                'content' => json_encode([
                    'en' => [
                        'plan_shape' => [
                            'type' => 'img',
                            'value' => 'general/images/effBZTwpwDwdAM5fssPf.png',
                            'class' => 'col-md-6'
                        ],
                        'plan_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/fcaBYj2VZKiZ7yCDE0Hh.png',
                            'class' => 'col-md-6'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Premium Plan',
                            'class' => 'col-md-6'
                        ],
                        'price' => [
                            'type' => 'text',
                            'value' => '$79',
                            'class' => 'col-md-6'
                        ],
                        'duration' => [
                            'type' => 'text',
                            'value' => 'monthly',
                            'class' => 'col-md-6'
                        ],
                        'feature_1' => [
                            'type' => 'text',
                            'value' => 'Free 500 GB Linux Hosting',
                            'class' => 'col-md-6'
                        ],
                        'feature_2' => [
                            'type' => 'text',
                            'value' => 'Dedicated Tech Experts',
                            'class' => 'col-md-6'
                        ],
                        'feature_3' => [
                            'type' => 'text',
                            'value' => '24/7 System Monitoring',
                            'class' => 'col-md-6'
                        ],
                        'feature_4' => [
                            'type' => 'text',
                            'value' => 'Security Management',
                            'class' => 'col-md-6'
                        ],
                        'feature_5' => [
                            'type' => 'text',
                            'value' => 'Unlimited Download',
                            'class' => 'col-md-6'
                        ],
                        'button_name' => [
                            'type' => 'text',
                            'value' => 'choose Plan',
                            'class' => 'col-md-6'
                        ],
                        'button_link' => [
                            'type' => 'text',
                            'value' => '/contact',
                            'class' => 'col-md-6'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Plan Premium',
                            'class' => 'col-md-6'
                        ],
                        'price' => [
                            'type' => 'text',
                            'value' => '$79',
                            'class' => 'col-md-6'
                        ],
                        'duration' => [
                            'type' => 'text',
                            'value' => 'mensual',
                            'class' => 'col-md-6'
                        ],
                        'feature_1' => [
                            'type' => 'text',
                            'value' => 'Alojamiento Linux gratuito de 500 GB',
                            'class' => 'col-md-6'
                        ],
                        'feature_2' => [
                            'type' => 'text',
                            'value' => 'Expertos tecnológicos dedicados',
                            'class' => 'col-md-6'
                        ],
                        'feature_3' => [
                            'type' => 'text',
                            'value' => '24 horas al día, 7 días a la semana',
                            'class' => 'col-md-6'
                        ],
                        'feature_4' => [
                            'type' => 'text',
                            'value' => 'Gestion de seguridad',
                            'class' => 'col-md-6'
                        ],
                        'feature_5' => [
                            'type' => 'text',
                            'value' => 'Descarga ilimitada',
                            'class' => 'col-md-6'
                        ],
                        'button_name' => [
                            'type' => 'text',
                            'value' => 'elegir plan',
                            'class' => 'col-md-6'
                        ]
                    ]
                ]),
                'created_at' => '2024-03-13 10:54:38',
                'updated_at' => '2024-05-17 04:42:00'
            ],
            [
                'id' => 42,
                'component_id' => 9,
                'content' => json_encode([
                    'en' => [
                        'testimonial_item_avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/jkg0qud77FZnJRY7CjoJ.png',
                            'class' => 'col-md-12'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Alex Pranto',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Ethical Hacker',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '4',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit nteger maecenas porta is nunc nul viverra Aenean pulvinar maximus leo nunc viverra laoreet est the isporta adipiscing pretium',
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Alex Pranto',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Hacker ético',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '4',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit neteger maecenas porta ahora es nul viverra',
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-03-13 13:51:42',
                'updated_at' => '2024-05-14 19:55:49'
            ],
            [
                'id' => 43,
                'component_id' => 9,
                'content' => json_encode([
                    'en' => [
                        'testimonial_item_avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/Ciqg7zlVYbUcsvBIsVOI.png',
                            'class' => 'col-md-12'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Adity Roy',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Web Designer',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit nteger maecenas porta is nunc nul viverra Aenean pulvinar maximus leo nunc viverra laoreet est the isporta adipiscing pretium',
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Adity Roy',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Diseñadora web',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit neteger maecenas porta ahora es nul viverra',
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-03-13 13:51:42',
                'updated_at' => '2024-05-14 19:56:11'
            ],
            [
                'id' => 44,
                'component_id' => 9,
                'content' => json_encode([
                    'en' => [
                        'testimonial_item_avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/2pA5yUY1AHC3cFC21O8S.png',
                            'class' => 'col-md-12'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Mohmamd Arif',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Software Tester',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit nteger maecenas porta is nunc nul viverra Aenean pulvinar maximus leo nunc viverra laoreet est the isporta adipiscing pretium',
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Mohmamd Arif',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Probador de software',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit neteger maecenas porta ahora es nul viverra',
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-03-13 13:51:42',
                'updated_at' => '2024-05-14 19:56:35'
            ],
            [
                'id' => 45,
                'component_id' => 9,
                'content' => json_encode([
                    'en' => [
                        'testimonial_item_avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/2pA5yUY1AHC3cFC21O8S.png',
                            'class' => 'col-md-12'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Mohmamd Arif',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Software Tester',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit nteger maecenas porta is nunc nul viverra Aenean pulvinar maximus leo nunc viverra laoreet est the isporta adipiscing pretium',
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Mohmamd Arif',
                            'class' => 'col-md-6'
                        ],
                        'profession' => [
                            'type' => 'text',
                            'value' => 'Probador de software',
                            'class' => 'col-md-6'
                        ],
                        'rating' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-12'
                        ],
                        'comment' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur elit neteger maecenas porta ahora es nul viverra',
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-03-13 13:51:42',
                'updated_at' => '2024-05-14 19:56:35'
            ],
            [
                'id' => 46,
                'component_id' => 8,
                'content' => json_encode([
                    'en' => [
                        'plan_shape' => [
                            'type' => 'img',
                            'value' => 'general/images/effBZTwpwDwdAM5fssPf.png',
                            'class' => 'col-md-6'
                        ],
                        'plan_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/fcaBYj2VZKiZ7yCDE0Hh.png',
                            'class' => 'col-md-6'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Premium Plan',
                            'class' => 'col-md-6'
                        ],
                        'price' => [
                            'type' => 'text',
                            'value' => '$79',
                            'class' => 'col-md-6'
                        ],
                        'duration' => [
                            'type' => 'text',
                            'value' => 'monthly',
                            'class' => 'col-md-6'
                        ],
                        'feature_1' => [
                            'type' => 'text',
                            'value' => 'Free 500 GB Linux Hosting',
                            'class' => 'col-md-6'
                        ],
                        'feature_2' => [
                            'type' => 'text',
                            'value' => 'Dedicated Tech Experts',
                            'class' => 'col-md-6'
                        ],
                        'feature_3' => [
                            'type' => 'text',
                            'value' => '24/7 System Monitoring',
                            'class' => 'col-md-6'
                        ],
                        'feature_4' => [
                            'type' => 'text',
                            'value' => 'Security Management',
                            'class' => 'col-md-6'
                        ],
                        'feature_5' => [
                            'type' => 'text',
                            'value' => 'Unlimited Download',
                            'class' => 'col-md-6'
                        ],
                        'button_name' => [
                            'type' => 'text',
                            'value' => 'choose Plan',
                            'class' => 'col-md-6'
                        ],
                        'button_link' => [
                            'type' => 'text',
                            'value' => '/contact',
                            'class' => 'col-md-6'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Plan Premium',
                            'class' => 'col-md-6'
                        ],
                        'price' => [
                            'type' => 'text',
                            'value' => '$79',
                            'class' => 'col-md-6'
                        ],
                        'duration' => [
                            'type' => 'text',
                            'value' => 'mensual',
                            'class' => 'col-md-6'
                        ],
                        'feature_1' => [
                            'type' => 'text',
                            'value' => 'Alojamiento Linux gratuito de 500 GB',
                            'class' => 'col-md-6'
                        ],
                        'feature_2' => [
                            'type' => 'text',
                            'value' => 'Expertos tecnológicos dedicados',
                            'class' => 'col-md-6'
                        ],
                        'feature_3' => [
                            'type' => 'text',
                            'value' => '24 horas al día, 7 días a la semana',
                            'class' => 'col-md-6'
                        ],
                        'feature_4' => [
                            'type' => 'text',
                            'value' => 'Gestion de seguridad',
                            'class' => 'col-md-6'
                        ],
                        'feature_5' => [
                            'type' => 'text',
                            'value' => 'Descarga ilimitada',
                            'class' => 'col-md-6'
                        ],
                        'button_name' => [
                            'type' => 'text',
                            'value' => 'elegir plan',
                            'class' => 'col-md-6'
                        ]
                    ]
                ]),
                'created_at' => '2024-03-13 10:54:38',
                'updated_at' => '2024-05-17 04:42:00'
            ],
            [
                'id' => 54,
                'component_id' => 14,
                'content' => json_encode([
                    'en' => [
                        'avatar' => ['type' => 'img', 'value' => 'general/images/wtNA0K1qztJNNtvnFGaX.jpg', 'class' => 'col-md-12'],
                        'name' => ['type' => 'text', 'value' => 'Kawser Ahmed', 'class' => 'col-md-6'],
                        'work_at' => ['type' => 'text', 'value' => 'Web Designer', 'class' => 'col-md-6'],
                        'facebook_profile' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false],
                        'instagram_profile' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false],
                        'linkedin_profile' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false],
                        'pinterest_profile' => ['type' => 'text', 'value' => '#', 'class' => 'col-md-6', 'trans' => false],
                        'info_title' => ['type' => 'text', 'value' => 'About Me', 'class' => 'col-md-12'],
                        'info' => ['type' => 'textarea', 'value' => "This good man possesses qualities that inspire us all. He is selfless, always putting the needs of others before his own. Whether it's helping a neighbor in distress, volunteering at local charities, or simply lending a listening ear to those who need it, he consistently demonstrates the true meaning of altruism.\r\n\r\nThis good man is a source of unwavering support and encouragement to those around him. He is a pillar of strength in times of adversity and a wellspring of joy in times of celebration.", 'class' => 'col-md-12'],
                        'skill_1' => ['type' => 'text', 'value' => 'IT Management', 'class' => 'col-md-6'],
                        'skill_experience_1' => ['type' => 'text', 'value' => '80', 'class' => 'col-md-6'],
                        'skill_2' => ['type' => 'text', 'value' => 'Web Development', 'class' => 'col-md-6'],
                        'skill_experience_2' => ['type' => 'text', 'value' => '60', 'class' => 'col-md-6'],
                        'skill_3' => ['type' => 'text', 'value' => 'Network Security', 'class' => 'col-md-6'],
                        'skill_experience_3' => ['type' => 'text', 'value' => '90', 'class' => 'col-md-6'],
                        'skill_4' => ['type' => 'text', 'value' => 'Platform Integration', 'class' => 'col-md-6'],
                        'skill_experience_4' => ['type' => 'text', 'value' => '95', 'class' => 'col-md-6'],
                        'description_title' => ['type' => 'text', 'value' => 'Education Background', 'class' => 'col-md-12'],
                        'description' => ['type' => 'rich_text', 'value' => "<h4><span class=\"primary-color text-capitalize mb-3\">Bachelor's Degree</span>, 2010</h4>\r\n\r\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>\r\n\r\n<h4><span class=\"primary-color text-capitalize mb-3 mt-5\">Master's Degree In Design</span>, 2015</h4>\r\n\r\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>", 'class' => 'col-md-12']
                    ],
                    'es' => [
                        'name' => ['type' => 'text', 'value' => 'Kawser Ahmed', 'class' => 'col-md-6'],
                        'work_at' => ['type' => 'text', 'value' => 'Diseñadora web', 'class' => 'col-md-6'],
                        'info_title' => ['type' => 'text', 'value' => 'Acerca de mí', 'class' => 'col-md-12'],
                        'info' => ['type' => 'textarea', 'value' => "Este buen hombre posee cualidades que nos inspiran a todos. Es desinteresado y siempre antepone las necesidades de los demás a las suyas propias. Ya sea ayudando a un vecino en apuros, siendo voluntario en organizaciones benéficas locales o simplemente escuchando a quienes lo necesitan, él demuestra constantemente el verdadero significado del altruismo.\r\n\r\nEste buen hombre es una fuente de apoyo y aliento inquebrantable para quienes lo rodean. Él es un pilar de fortaleza en tiempos de adversidad y una fuente de alegría en tiempos de celebración.", 'class' => 'col-md-12'],
                        'skill_1' => ['type' => 'text', 'value' => 'Gestión de TI', 'class' => 'col-md-6'],
                        'skill_experience_1' => ['type' => 'text', 'value' => '80', 'class' => 'col-md-6'],
                        'skill_2' => ['type' => 'text', 'value' => 'Desarrollo web', 'class' => 'col-md-6'],
                        'skill_experience_2' => ['type' => 'text', 'value' => '60', 'class' => 'col-md-6'],
                        'skill_3' => ['type' => 'text', 'value' => 'Seguridad de la red', 'class' => 'col-md-6'],
                        'skill_experience_3' => ['type' => 'text', 'value' => '90', 'class' => 'col-md-6'],
                        'skill_4' => ['type' => 'text', 'value' => 'Integración de plataforma', 'class' => 'col-md-6'],
                        'skill_experience_4' => ['type' => 'text', 'value' => '95', 'class' => 'col-md-6'],
                        'description_title' => ['type' => 'text', 'value' => 'Antecedentes educacionales', 'class' => 'col-md-12'],
                        'description' => ['type' => 'rich_text', 'value' => "<h4><span>Licenciatura, 2010</span></h4>\r\n\r\n<h4><span><br></span><span style=\"font-size:16px;\">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</span><br></h4>\r\n\r\n<h4><span>Maestría en Diseño, 2015</span><br></h4>\r\n\r\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</p>", 'class' => 'col-md-12']
                    ]
                ]),
                'created_at' => '2024-03-18 00:15:57',
                'updated_at' => '2024-05-14 20:09:18'
            ],
            [
                'id' => 55,
                'component_id' => 14,
                'content' => json_encode([
                    'en' => [
                        'avatar' => ['type' => 'img', 'value' => 'general/images/wtNA0K1qztJNNtvnFGaX.jpg', 'class' => 'col-md-12'],
                        'name' => ['type' => 'text', 'value' => 'Kawser Ahmed', 'class' => 'col-md-6'],
                        'work_at' => ['type' => 'text', 'value' => 'Web Designer', 'class' => 'col-md-6'],
                        'info_title' => ['type' => 'text', 'value' => 'About Me', 'class' => 'col-md-12'],
                        'info' => ['type' => 'textarea', 'value' => "This good man possesses qualities that inspire us all. He is selfless, always putting the needs of others before his own. Whether it's helping a neighbor in distress, volunteering at local charities, or simply lending a listening ear to those who need it, he consistently demonstrates the true meaning of altruism.\r\n\r\nThis good man is a source of unwavering support and encouragement to those around him. He is a pillar of strength in times of adversity and a wellspring of joy in times of celebration.", 'class' => 'col-md-12'],
                        'skill_1' => ['type' => 'text', 'value' => 'IT Management', 'class' => 'col-md-6'],
                        'skill_experience_1' => ['type' => 'text', 'value' => '80', 'class' => 'col-md-6'],
                        'skill_2' => ['type' => 'text', 'value' => 'Web Development', 'class' => 'col-md-6'],
                        'skill_experience_2' => ['type' => 'text', 'value' => '60', 'class' => 'col-md-6'],
                        'skill_3' => ['type' => 'text', 'value' => 'Network Security', 'class' => 'col-md-6'],
                        'skill_experience_3' => ['type' => 'text', 'value' => '90', 'class' => 'col-md-6'],
                        'skill_4' => ['type' => 'text', 'value' => 'Platform Integration', 'class' => 'col-md-6'],
                        'skill_experience_4' => ['type' => 'text', 'value' => '95', 'class' => 'col-md-6'],
                        'description_title' => ['type' => 'text', 'value' => 'Education Background', 'class' => 'col-md-12'],
                        'description' => ['type' => 'rich_text', 'value' => "<h4><span class=\"primary-color text-capitalize mb-3\">Bachelor's Degree</span>, 2010</h4>\r\n\r\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>\r\n\r\n<h4><span class=\"primary-color text-capitalize mb-3 mt-5\">Master's Degree In Design</span>, 2015</h4>\r\n\r\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>", 'class' => 'col-md-12']
                    ]
                ]),
                'created_at' => '2024-03-18 00:15:57',
                'updated_at' => '2024-05-14 20:09:18'
            ],
            [
                'id' => 56,
                'component_id' => 14,
                'content' => json_encode([
                    'en' => [
                        'avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/TuwjB6W2s17gZCJb60MV.jpg',
                            'class' => 'col-md-12'
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Alex Pranto',
                            'class' => 'col-md-6'
                        ],
                        'work_at' => [
                            'type' => 'text',
                            'value' => 'UI/UX Designer',
                            'class' => 'col-md-6'
                        ],
                        'facebook_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false
                        ],
                        'instagram_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false
                        ],
                        'linkedin_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false
                        ],
                        'pinterest_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false
                        ],
                        'info_title' => [
                            'type' => 'text',
                            'value' => 'About Me',
                            'class' => 'col-md-12'
                        ],
                        'info' => [
                            'type' => 'textarea',
                            'value' => 'This good man possesses qualities that inspire us all. He is selfless, always putting the needs of others before his own. Whether it\'s helping a neighbor in distress, volunteering at local charities, or simply lending a listening ear to those who need it, he consistently demonstrates the true meaning of altruism.\\r\\n\\r\\nThis good man is a source of unwavering support and encouragement to those around him. He is a pillar of strength in times of adversity and a wellspring of joy in times of celebration.',
                            'class' => 'col-md-12'
                        ],
                        'skill_1' => [
                            'type' => 'text',
                            'value' => 'IT Management',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_1' => [
                            'type' => 'text',
                            'value' => '70',
                            'class' => 'col-md-6'
                        ],
                        'skill_2' => [
                            'type' => 'text',
                            'value' => 'Web Development',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_2' => [
                            'type' => 'text',
                            'value' => '50',
                            'class' => 'col-md-6'
                        ],
                        'skill_3' => [
                            'type' => 'text',
                            'value' => 'Network Security',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_3' => [
                            'type' => 'text',
                            'value' => '90',
                            'class' => 'col-md-6'
                        ],
                        'skill_4' => [
                            'type' => 'text',
                            'value' => 'Platform Integration',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_4' => [
                            'type' => 'text',
                            'value' => '95',
                            'class' => 'col-md-6'
                        ],
                        'description_title' => [
                            'type' => 'text',
                            'value' => 'Education Background',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'rich_text',
                            'value' => '<h4><span class="primary-color text-capitalize mb-3">Bachelor\'s Degree</span>, 2010</h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>\\r\\n\\r\\n<h4><span class="primary-color text-capitalize mb-3 mt-5">Master\'s Degree In Design</span>, 2015</h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>',
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Alex Pranto',
                            'class' => 'col-md-6'
                        ],
                        'work_at' => [
                            'type' => 'text',
                            'value' => 'Diseñador de interfaz de usuario / UX',
                            'class' => 'col-md-6'
                        ],
                        'info_title' => [
                            'type' => 'text',
                            'value' => 'Acerca de mí',
                            'class' => 'col-md-12'
                        ],
                        'info' => [
                            'type' => 'textarea',
                            'value' => 'Este buen hombre posee cualidades que nos inspiran a todos. Es desinteresado y siempre antepone las necesidades de los demás a las suyas propias. Ya sea ayudando a un vecino en apuros, siendo voluntario en organizaciones benéficas locales o simplemente escuchando a quienes lo necesitan, él demuestra constantemente el verdadero significado del altruismo.\\r\\n\\r\\nEste buen hombre es una fuente de apoyo y aliento inquebrantable para quienes lo rodean. Él es un pilar de fortaleza en tiempos de adversidad y una fuente de alegría en tiempos de celebración.',
                            'class' => 'col-md-12'
                        ],
                        'skill_1' => [
                            'type' => 'text',
                            'value' => 'Gestión de TI',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_1' => [
                            'type' => 'text',
                            'value' => '70',
                            'class' => 'col-md-6'
                        ],
                        'skill_2' => [
                            'type' => 'text',
                            'value' => 'Desarrollo web',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_2' => [
                            'type' => 'text',
                            'value' => '50',
                            'class' => 'col-md-6'
                        ],
                        'skill_3' => [
                            'type' => 'text',
                            'value' => 'Seguridad de la red',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_3' => [
                            'type' => 'text',
                            'value' => '90',
                            'class' => 'col-md-6'
                        ],
                        'skill_4' => [
                            'type' => 'text',
                            'value' => 'Integración de plataforma',
                            'class' => 'col-md-6'
                        ],
                        'skill_experience_4' => [
                            'type' => 'text',
                            'value' => '95',
                            'class' => 'col-md-6'
                        ],
                        'description_title' => [
                            'type' => 'text',
                            'value' => 'Antecedentes educacionales',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'rich_text',
                            'value' => '<h4><span>Licenciatura, 2010</span><br></h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos invierte cada día para estar al día y resolver sus preguntas.</p>',
                            'class' => 'col-md-12'
                        ]
                    ]
                ])
            ],
            [
            'id' => 57,
            'component_id' => 14,
            'content' => json_encode([
                'en' => [
                    'avatar' => [
                        'type' => 'img',
                        'value' => 'general/images/3JwXrTbOUTAtOCyhuyPm.jpg',
                        'class' => 'col-md-12',
                    ],
                    'name' => [
                        'type' => 'text',
                        'value' => 'Anneya Roy',
                        'class' => 'col-md-6',
                    ],
                    'work_at' => [
                        'type' => 'text',
                        'value' => 'Software Engineer',
                        'class' => 'col-md-6',
                    ],
                    'facebook_profile' => [
                        'type' => 'text',
                        'value' => '#',
                        'class' => 'col-md-6',
                        'trans' => false,
                    ],
                    'instagram_profile' => [
                        'type' => 'text',
                        'value' => '#',
                        'class' => 'col-md-6',
                        'trans' => false,
                    ],
                    'linkedin_profile' => [
                        'type' => 'text',
                        'value' => '#',
                        'class' => 'col-md-6',
                        'trans' => false,
                    ],
                    'pinterest_profile' => [
                        'type' => 'text',
                        'value' => '#',
                        'class' => 'col-md-6',
                        'trans' => false,
                    ],
                    'info_title' => [
                        'type' => 'text',
                        'value' => 'About Me',
                        'class' => 'col-md-12',
                    ],
                    'info' => [
                        'type' => 'textarea',
                        'value' => "This good man possesses qualities that inspire us all. He is selfless, always putting the needs of others before his own. Whether it's helping a neighbor in distress, volunteering at local charities, or simply lending a listening ear to those who need it, he consistently demonstrates the true meaning of altruism.\n\nThis good man is a source of unwavering support and encouragement to those around him. He is a pillar of strength in times of adversity and a wellspring of joy in times of celebration.",
                        'class' => 'col-md-12',
                    ],
                    'skill_1' => [
                        'type' => 'text',
                        'value' => 'IT Management',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_1' => [
                        'type' => 'text',
                        'value' => '80',
                        'class' => 'col-md-6',
                    ],
                    'skill_2' => [
                        'type' => 'text',
                        'value' => 'Web Development',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_2' => [
                        'type' => 'text',
                        'value' => '60',
                        'class' => 'col-md-6',
                    ],
                    'skill_3' => [
                        'type' => 'text',
                        'value' => 'Network Security',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_3' => [
                        'type' => 'text',
                        'value' => '90',
                        'class' => 'col-md-6',
                    ],
                    'skill_4' => [
                        'type' => 'text',
                        'value' => 'Platform Integration',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_4' => [
                        'type' => 'text',
                        'value' => '95',
                        'class' => 'col-md-6',
                    ],
                    'description_title' => [
                        'type' => 'text',
                        'value' => 'Education Background',
                        'class' => 'col-md-12',
                    ],
                    'description' => [
                        'type' => 'rich_text',
                        'value' => "<h4><span class=\"primary-color text-capitalize mb-3\">Bachelor's Degree</span>, 2010</h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>\n\n<h4><span class=\"primary-color text-capitalize mb-3 mt-5\">Master's Degree In Design</span>, 2015</h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>",
                        'class' => 'col-md-12',
                    ],
                ],
                'es' => [
                    'name' => [
                        'type' => 'text',
                        'value' => 'Anneya Roy',
                        'class' => 'col-md-6',
                    ],
                    'work_at' => [
                        'type' => 'text',
                        'value' => 'Ingeniero de software',
                        'class' => 'col-md-6',
                    ],
                    'info_title' => [
                        'type' => 'text',
                        'value' => 'Acerca de mí',
                        'class' => 'col-md-12',
                    ],
                    'info' => [
                        'type' => 'textarea',
                        'value' => "Este buen hombre posee cualidades que nos inspiran a todos. Es desinteresado y siempre antepone las necesidades de los demás a las suyas propias. Ya sea ayudando a un vecino en apuros, siendo voluntario en organizaciones benéficas locales o simplemente escuchando a quienes lo necesitan, él demuestra constantemente el verdadero significado del altruismo.\n\nEste buen hombre es una fuente de apoyo y aliento inquebrantable para quienes lo rodean. Él es un pilar de fortaleza en tiempos de adversidad y una fuente de alegría en tiempos de celebración.",
                        'class' => 'col-md-12',
                    ],
                    'skill_1' => [
                        'type' => 'text',
                        'value' => 'Gestión de TI',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_1' => [
                        'type' => 'text',
                        'value' => '80',
                        'class' => 'col-md-6',
                    ],
                    'skill_2' => [
                        'type' => 'text',
                        'value' => 'Desarrollo web',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_2' => [
                        'type' => 'text',
                        'value' => '60',
                        'class' => 'col-md-6',
                    ],
                    'skill_3' => [
                        'type' => 'text',
                        'value' => 'Seguridad de la red',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_3' => [
                        'type' => 'text',
                        'value' => '90',
                        'class' => 'col-md-6',
                    ],
                    'skill_4' => [
                        'type' => 'text',
                        'value' => 'Integración de plataforma',
                        'class' => 'col-md-6',
                    ],
                    'skill_experience_4' => [
                        'type' => 'text',
                        'value' => '95',
                        'class' => 'col-md-6',
                    ],
                    'description_title' => [
                        'type' => 'text',
                        'value' => 'Antecedentes educacionales',
                        'class' => 'col-md-12',
                    ],
                    'description' => [
                        'type' => 'rich_text',
                        'value' => "<h4><span>Licenciatura, 2010</span><br></h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</p>\n\n<h4><span>Maestría en Diseño, 2015</span><br></h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</p>",
                        'class' => 'col-md-12',
                    ],
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ],

            [
                'id' => 58,
                'component_id' => 14,
                'content' => json_encode([
                    'en' => [
                        'avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/VGvQfd85h5quIio2Hxei.jpg',
                            'class' => 'col-md-12',
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Mohmmad Arif',
                            'class' => 'col-md-6',
                        ],
                        'work_at' => [
                            'type' => 'text',
                            'value' => 'Marketing Manager',
                            'class' => 'col-md-6',
                        ],
                        'facebook_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'instagram_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'linkedin_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'pinterest_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'info_title' => [
                            'type' => 'text',
                            'value' => 'About Me',
                            'class' => 'col-md-12',
                        ],
                        'info' => [
                            'type' => 'textarea',
                            'value' => "This good man possesses qualities that inspire us all. He is selfless, always putting the needs of others before his own. Whether it's helping a neighbor in distress, volunteering at local charities, or simply lending a listening ear to those who need it, he consistently demonstrates the true meaning of altruism.\n\nThis good man is a source of unwavering support and encouragement to those around him. He is a pillar of strength in times of adversity and a wellspring of joy in times of celebration.",
                            'class' => 'col-md-12',
                        ],
                        'skill_1' => [
                            'type' => 'text',
                            'value' => 'IT Management',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_1' => [
                            'type' => 'text',
                            'value' => '80',
                            'class' => 'col-md-6',
                        ],
                        'skill_2' => [
                            'type' => 'text',
                            'value' => 'Web Development',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_2' => [
                            'type' => 'text',
                            'value' => '60',
                            'class' => 'col-md-6',
                        ],
                        'skill_3' => [
                            'type' => 'text',
                            'value' => 'Network Security',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_3' => [
                            'type' => 'text',
                            'value' => '90',
                            'class' => 'col-md-6',
                        ],
                        'skill_4' => [
                            'type' => 'text',
                            'value' => 'Platform Integration',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_4' => [
                            'type' => 'text',
                            'value' => '95',
                            'class' => 'col-md-6',
                        ],
                        'description_title' => [
                            'type' => 'text',
                            'value' => 'Education Background',
                            'class' => 'col-md-12',
                        ],
                        'description' => [
                            'type' => 'rich_text',
                            'value' => "<h4><span class=\"primary-color text-capitalize mb-3\">Bachelor's Degree</span>, 2010</h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>\n\n<h4><span class=\"primary-color text-capitalize mb-3 mt-5\">Master's Degree In Design</span>, 2015</h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>",
                            'class' => 'col-md-12',
                        ],
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Mohmmad Arif',
                            'class' => 'col-md-6',
                        ],
                        'work_at' => [
                            'type' => 'text',
                            'value' => 'Gerente de Mercadeo',
                            'class' => 'col-md-6',
                        ],
                        'info_title' => [
                            'type' => 'text',
                            'value' => 'Acerca de mí',
                            'class' => 'col-md-12',
                        ],
                        'info' => [
                            'type' => 'textarea',
                            'value' => "Este buen hombre posee cualidades que nos inspiran a todos. Es desinteresado y siempre antepone las necesidades de los demás a las suyas propias. Ya sea ayudando a un vecino en apuros, siendo voluntario en organizaciones benéficas locales o simplemente escuchando a quienes lo necesitan, él demuestra constantemente el verdadero significado del altruismo.\n\nEste buen hombre es una fuente de apoyo y aliento inquebrantable para quienes lo rodean. Él es un pilar de fortaleza en tiempos de adversidad y una fuente de alegría en tiempos de celebración.",
                            'class' => 'col-md-12',
                        ],
                        'skill_1' => [
                            'type' => 'text',
                            'value' => 'Gestión de TI',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_1' => [
                            'type' => 'text',
                            'value' => '80',
                            'class' => 'col-md-6',
                        ],
                        'skill_2' => [
                            'type' => 'text',
                            'value' => 'Desarrollo web',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_2' => [
                            'type' => 'text',
                            'value' => '60',
                            'class' => 'col-md-6',
                        ],
                        'skill_3' => [
                            'type' => 'text',
                            'value' => 'Seguridad de la red',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_3' => [
                            'type' => 'text',
                            'value' => '90',
                            'class' => 'col-md-6',
                        ],
                        'skill_4' => [
                            'type' => 'text',
                            'value' => 'Integración de plataforma',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_4' => [
                            'type' => 'text',
                            'value' => '95',
                            'class' => 'col-md-6',
                        ],
                        'description_title' => [
                            'type' => 'text',
                            'value' => 'Antecedentes educacionales',
                            'class' => 'col-md-12',
                        ],
                        'description' => [
                            'type' => 'rich_text',
                            'value' => "<h4><span>Licenciatura, 2010</span><br></h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</p>\n\n<h4><span>Maestría en Diseño, 2015</span><br></h4>\n\n<p style=\"font-size:16px;color:rgb(88,88,88);\">Es interesante observar cómo se ha desarrollado la historia. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</p>",
                            'class' => 'col-md-12',
                        ],
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],

             [
                'id' => 59,
                'component_id' => 14,
                'content' => json_encode([
                    'en' => [
                        'avatar' => [
                            'type' => 'img',
                            'value' => 'general/images/nz8lORDJmM889CkBYLel.jpg',
                            'class' => 'col-md-12',
                        ],
                        'name' => [
                            'type' => 'text',
                            'value' => 'Prince Sagor',
                            'class' => 'col-md-6',
                        ],
                        'work_at' => [
                            'type' => 'text',
                            'value' => 'Programmer',
                            'class' => 'col-md-6',
                        ],
                        'facebook_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'instagram_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'linkedin_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'pinterest_profile' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false,
                        ],
                        'info_title' => [
                            'type' => 'text',
                            'value' => 'About Me',
                            'class' => 'col-md-12',
                        ],
                        'info' => [
                            'type' => 'textarea',
                            'value' => 'This good man possesses qualities that inspire us all. He is selfless, always putting the needs of others before his own. Whether it\'s helping a neighbor in distress, volunteering at local charities, or simply lending a listening ear to those who need it, he consistently demonstrates the true meaning of altruism.\\r\\n\\r\\nThis good man is a source of unwavering support and encouragement to those around him. He is a pillar of strength in times of adversity and a wellspring of joy in times of celebration.',
                            'class' => 'col-md-12',
                        ],
                        'skill_1' => [
                            'type' => 'text',
                            'value' => 'IT Management',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_1' => [
                            'type' => 'text',
                            'value' => '45',
                            'class' => 'col-md-6',
                        ],
                        'skill_2' => [
                            'type' => 'text',
                            'value' => 'Web Development',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_2' => [
                            'type' => 'text',
                            'value' => '58',
                            'class' => 'col-md-6',
                        ],
                        'skill_3' => [
                            'type' => 'text',
                            'value' => 'Network Security',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_3' => [
                            'type' => 'text',
                            'value' => '95',
                            'class' => 'col-md-6',
                        ],
                        'skill_4' => [
                            'type' => 'text',
                            'value' => 'Platform Integration',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_4' => [
                            'type' => 'text',
                            'value' => '50',
                            'class' => 'col-md-6',
                        ],
                        'description_title' => [
                            'type' => 'text',
                            'value' => 'Education Background',
                            'class' => 'col-md-12',
                        ],
                        'description' => [
                            'type' => 'rich_text',
                            'value' => '<h4><span class="primary-color text-capitalize mb-3">Bachelor\'s Degree</span>, 2010</h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>\\r\\n\\r\\n<h4><span class="primary-color text-capitalize mb-3 mt-5">Master\'s Degree In Design</span>, 2015</h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat, ornare eget tristique vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus sem id massa semper ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet, leo auctor volutpat ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>',
                            'class' => 'col-md-12',
                        ]
                    ],
                    'es' => [
                        'name' => [
                            'type' => 'text',
                            'value' => 'Prince Sagor',
                            'class' => 'col-md-6',
                        ],
                        'work_at' => [
                            'type' => 'text',
                            'value' => 'Programador',
                            'class' => 'col-md-6',
                        ],
                        'info_title' => [
                            'type' => 'text',
                            'value' => 'Acerca de mí',
                            'class' => 'col-md-12',
                        ],
                        'info' => [
                            'type' => 'textarea',
                            'value' => 'Este buen hombre posee cualidades que nos inspiran a todos. Es desinteresado y siempre antepone las necesidades de los demás a las suyas propias. Ya sea ayudando a un vecino en apuros, siendo voluntario en organizaciones benéficas locales o simplemente escuchando a quienes lo necesitan, él demuestra constantemente el verdadero significado del altruismo.\\r\\n\\r\\nEste buen hombre es una fuente de apoyo y aliento inquebrantable para quienes lo rodean. Él es un pilar de fortaleza en tiempos de adversidad y una fuente de alegría en tiempos de celebración.',
                            'class' => 'col-md-12',
                        ],
                        'skill_1' => [
                            'type' => 'text',
                            'value' => 'Gestión de TI',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_1' => [
                            'type' => 'text',
                            'value' => '45',
                            'class' => 'col-md-6',
                        ],
                        'skill_2' => [
                            'type' => 'text',
                            'value' => 'Desarrollo web',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_2' => [
                            'type' => 'text',
                            'value' => '58',
                            'class' => 'col-md-6',
                        ],
                        'skill_3' => [
                            'type' => 'text',
                            'value' => 'Seguridad de la red',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_3' => [
                            'type' => 'text',
                            'value' => '95',
                            'class' => 'col-md-6',
                        ],
                        'skill_4' => [
                            'type' => 'text',
                            'value' => 'Integración de plataforma',
                            'class' => 'col-md-6',
                        ],
                        'skill_experience_4' => [
                            'type' => 'text',
                            'value' => '50',
                            'class' => 'col-md-6',
                        ],
                        'description_title' => [
                            'type' => 'text',
                            'value' => 'Antecedentes educacionales',
                            'class' => 'col-md-12',
                        ],
                        'description' => [
                            'type' => 'rich_text',
                            'value' => '<h4><span>Licenciatura, 2010</span><br></h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Después de todo, es el curso de la vida. No es necesario tomar la temperatura. Era el Mecenas del dios, necesita adornar su triste vida, su maquillaje vale el precio. Si no, ¿quién llora el fin de la vida? Siempre queda delicioso adornar la ensalada con la masa. De hecho, es genial para mis hijos. Quiere estar enfermo y enfermo. La flota de barcos, el autor de la carrera, el miedo al dolor se decía, pero no había urna del lago del valle.</p>\\r\\n\\r\\n<h4><span>Licenciatura en Diseño</span>, 2015</h4>\\r\\n\\r\\n<p style="font-size:16px;color:rgb(88,88,88);">Cuestionar el principio que daba pie, se notaba. Una cueva griega se pensaba en alguna ocasión esta en una razón. Era un gran logro para su educación, y un trágico comentario para los estudiantes.</p>',
                            'class' => 'col-md-12',
                        ]
                    ]
                ]),
                'created_at' => '2024-03-21 03:08:38',
                'updated_at' => '2024-05-14 20:30:40',
            ],
            [
                'id' => 60,
                'component_id' => 16,
                'content' => json_encode([
                    'en' => [
                        'question' => [
                            'type' => 'text',
                            'value' => 'Where should I incorporate my business?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'It is a long established fact that a reader be distracted by the readable content of a page when looking a its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ],
                    'es' => [
                        'question' => [
                            'type' => 'text',
                            'value' => '¿Dónde debo constituir mi negocio?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'Es un hecho establecido desde hace mucho tiempo que el lector se distrae con el contenido legible de una página cuando mira su diseño. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ]
                ]),
                'created_at' => '2024-03-21 03:07:16',
                'updated_at' => '2024-05-14 20:30:00',
            ],
            [
                'id' => 61,
                'component_id' => 16,
                'content' => json_encode([
                    'en' => [
                        'question' => [
                            'type' => 'text',
                            'value' => 'What happens my free trial?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'It is a long established fact that a reader be distracted by the readable content of a page when looking a its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ],
                    'es' => [
                        'question' => [
                            'type' => 'text',
                            'value' => '¿Qué pasa con mi prueba gratuita?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'Es un hecho establecido desde hace mucho tiempo que el lector se distrae con el contenido legible de una página cuando mira su diseño. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ]
                ]),
                'created_at' => '2024-03-21 03:08:20',
                'updated_at' => '2024-05-14 20:30:21',
            ],
            [
                'id' => 62,
                'component_id' => 16,
                'content' => json_encode([
                    'en' => [
                        'question' => [
                            'type' => 'text',
                            'value' => 'What is included in your services?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'It is a long established fact that a reader be distracted by the readable content of a page when looking a its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ],
                    'es' => [
                        'question' => [
                            'type' => 'text',
                            'value' => '¿Qué está incluido en sus servicios?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'Es un hecho establecido desde hace mucho tiempo que el lector se distrae con el contenido legible de una página cuando mira su diseño. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ]
                ]),
                'created_at' => '2024-03-21 03:08:38',
                'updated_at' => '2024-05-14 20:30:40',
            ],
            [
                'id' => 63,
                'component_id' => 16,
                'content' => json_encode([
                    'en' => [
                        'question' => [
                            'type' => 'text',
                            'value' => 'What type of company is measured?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'It is a long established fact that a reader be distracted by the readable content of a page when looking a its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ],
                    'es' => [
                        'question' => [
                            'type' => 'text',
                            'value' => '¿Qué tipo de empresa se mide?',
                            'class' => 'col-md-12',
                        ],
                        'answer' => [
                            'type' => 'textarea',
                            'value' => 'Es un hecho establecido desde hace mucho tiempo que el lector se distrae con el contenido legible de una página cuando mira su diseño. Muchos paquetes de autoedición y editores de páginas web ahora usan Lorem Ipsum',
                            'class' => 'col-md-12',
                        ]
                    ]
                ]),
                'created_at' => '2024-03-21 03:28:30',
                'updated_at' => '2024-05-14 20:30:56',
            ],

        
            [
                'id' => 78,
                'component_id' => 18,
                'content' => json_encode([
                    'en' => [
                        'regular_left_shape' => [
                            'type' => 'img',
                            'value' => 'general/images/zpI9BhTLM7RJkBQnh5t8.png',
                            'class' => 'col-md-6'
                        ],
                        'solid_left_shape' => [
                            'type' => 'img',
                            'value' => 'general/images/upZoc23r7WUR4OE9osll.png',
                            'class' => 'col-md-6'
                        ],
                        'shape_left' => [
                            'type' => 'img',
                            'value' => 'general/images/bPQMqK6w7FOrWbJGqfVe.png',
                            'class' => 'col-md-6'
                        ],
                        'shape_right_line' => [
                            'type' => 'img',
                            'value' => 'general/images/tGomU9BILuMr24QbtVfE.png',
                            'class' => 'col-md-6'
                        ],
                        'shape_right' => [
                            'type' => 'img',
                            'value' => 'general/images/GnOL0lcUxyhSk4guR2gO.png',
                            'class' => 'col-md-6'
                        ],
                        'right_line1' => [
                            'type' => 'img',
                            'value' => 'general/images/RDcS6zUnHfsqzxFKNXjF.png',
                            'class' => 'col-md-6'
                        ],
                        'right_line2' => [
                            'type' => 'img',
                            'value' => 'general/images/90PiWZDECzNC06QyVF6V.png',
                            'class' => 'col-md-6'
                        ],
                        'right_line3' => [
                            'type' => 'img',
                            'value' => 'general/images/3V2SqUIziLG5AU99NHLW.png',
                            'class' => 'col-md-6'
                        ],
                        'right_line4' => [
                            'type' => 'img',
                            'value' => 'general/images/XUodfSA5xzrCKmUxNihA.png',
                            'class' => 'col-md-6'
                        ],
                        'slide_bg' => [
                            'type' => 'img',
                            'value' => 'general/images/BcikwNLV6d9ZB2mRikJA.jpg',
                            'class' => 'col-md-6'
                        ],
                        'heading' => [
                            'type' => 'text',
                            'value' => 'Best it SOLUTION Provider',
                            'class' => 'col-md-6'
                        ],
                        'sub_heading' => [
                            'type' => 'text',
                            'value' => 'Excellent It Services  for Your Success',
                            'class' => 'col-md-6'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur adipiscing\r\n elit\r\n   aenean scelerisque at augue vitae consequat\r\n     <br>\r\n        quisque eget congue\r\n   velit\r\n       in cursus leo sed\r\n       sodales est eget turpis.',
                            'class' => 'col-md-12'
                        ],
                        'button_title' => [
                            'type' => 'text',
                            'value' => 'Explore More',
                            'class' => 'col-md-6'
                        ],
                        'button_link' => [
                            'type' => 'text',
                            'value' => '#',
                            'class' => 'col-md-6',
                            'trans' => false
                        ]
                    ],
                    'es' => [
                        'heading' => [
                            'type' => 'text',
                            'value' => 'Mejor proveedor de SOLUCIONES',
                            'class' => 'col-md-6'
                        ],
                        'sub_heading' => [
                            'type' => 'text',
                            'value' => 'Excelentes servicios de TI para su éxito',
                            'class' => 'col-md-6'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => 'Consectetur adipiscing elit aenean scelerisque at augue vitae consequat <br> quisque eget congue velit in cursus leo sed sodales est eget turpis.',
                            'class' => 'col-md-12'
                        ],
                        'button_title' => [
                            'type' => 'text',
                            'value' => 'Explora más',
                            'class' => 'col-md-6'
                        ]
                    ]
                ]),
                'created_at' => '2024-05-10 22:07:50',
                'updated_at' => '2024-05-14 02:50:43',
            ],

             [
                'id' => 81,
                'component_id' => 22,
                'content' => json_encode([
                    'en' => [
                        'array_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/lK7p9iYeMQwNxKZZwH8a.png',
                            'class' => 'col-md-6'
                        ],
                        'process_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/2gpOZdFMiwfrgPmuYChB.png',
                            'class' => 'col-md-6'
                        ],
                        'process_number' => [
                            'type' => 'text',
                            'value' => '1',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Define Requirements',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "In a free hour, when our power of choice is untrammelled and when nothing prevents\\r\\n\\t\\t\\t\\t\\t\\t\\tdolor\\r\\n\\t\\t\\t\\t\\t\\t\\tsit amet, consectetur",
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'process_number' => [
                            'type' => 'text',
                            'value' => '1',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Definir requisitos',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "En una hora libre, cuando nuestro poder de elección está libre y cuando nada impide\\r\\ndolor\\r\\nsentarse amet, conctetur",
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-05-11 13:25:10',
                'updated_at' => '2024-05-14 20:33:06',
            ],
            [
                'id' => 82,
                'component_id' => 22,
                'content' => json_encode([
                    'en' => [
                        'array_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/WrStCRmXhumtuglrWmRZ.png',
                            'class' => 'col-md-6'
                        ],
                        'process_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/p2V9aBo2Yv5EG9WGL2Rq.png',
                            'class' => 'col-md-6'
                        ],
                        'process_number' => [
                            'type' => 'text',
                            'value' => '2',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Design & Prototyping',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "In a free hour, when our power of choice is untrammelled and when nothing prevents\\r\\n\\t\\t\\t\\t\\t\\t\\tdolor\\r\\n\\t\\t\\t\\t\\t\\t\\tsit amet, consectetur",
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'process_number' => [
                            'type' => 'text',
                            'value' => '2',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Diseño y creación de prototipos',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "En una hora libre, cuando nuestro poder de elección está libre y cuando nada impide\\r\\ndolor\\r\\nsentarse amet, conctetur",
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-05-11 13:25:44',
                'updated_at' => '2024-05-14 20:33:27',
            ],
            [
            'id' => 79,
            'component_id' => 18,
            'content' => json_encode([
                'en' => [
                    'regular_left_shape' => [
                        'type' => 'img',
                        'value' => 'general/images/zpI9BhTLM7RJkBQnh5t8.png',
                        'class' => 'col-md-6'
                    ],
                    'solid_left_shape' => [
                        'type' => 'img',
                        'value' => 'general/images/upZoc23r7WUR4OE9osll.png',
                        'class' => 'col-md-6'
                    ],
                    'shape_left' => [
                        'type' => 'img',
                        'value' => 'general/images/bPQMqK6w7FOrWbJGqfVe.png',
                        'class' => 'col-md-6'
                    ],
                    'shape_right_line' => [
                        'type' => 'img',
                        'value' => 'general/images/tGomU9BILuMr24QbtVfE.png',
                        'class' => 'col-md-6'
                    ],
                    'shape_right' => [
                        'type' => 'img',
                        'value' => 'general/images/GnOL0lcUxyhSk4guR2gO.png',
                        'class' => 'col-md-6'
                    ],
                    'right_line1' => [
                        'type' => 'img',
                        'value' => 'general/images/RDcS6zUnHfsqzxFKNXjF.png',
                        'class' => 'col-md-6'
                    ],
                    'right_line2' => [
                        'type' => 'img',
                        'value' => 'general/images/90PiWZDECzNC06QyVF6V.png',
                        'class' => 'col-md-6'
                    ],
                    'right_line3' => [
                        'type' => 'img',
                        'value' => 'general/images/3V2SqUIziLG5AU99NHLW.png',
                        'class' => 'col-md-6'
                    ],
                    'right_line4' => [
                        'type' => 'img',
                        'value' => 'general/images/XUodfSA5xzrCKmUxNihA.png',
                        'class' => 'col-md-6'
                    ],
                    'slide_bg' => [
                        'type' => 'img',
                        'value' => 'general/images/U4byKZfqtU008n2ha7qy.jpg',
                        'class' => 'col-md-6'
                    ],
                    'heading' => [
                        'type' => 'text',
                        'value' => 'Best it SOLUTION Provider',
                        'class' => 'col-md-6'
                    ],
                    'sub_heading' => [
                        'type' => 'text',
                        'value' => 'Excellent It Services for Your Success',
                        'class' => 'col-md-6'
                    ],
                    'description' => [
                        'type' => 'textarea',
                        'value' => "Consectetur adipiscing\r\n                                    elit\r\n                                    aenean scelerisque at augue vitae consequat\r\n                                    <br>\r\n                                    quisque eget congue\r\n                                    velit\r\n                                    in cursus leo sed\r\n                                    sodales est eget turpis.",
                        'class' => 'col-md-12'
                    ],
                    'button_title' => [
                        'type' => 'text',
                        'value' => 'Explore More',
                        'class' => 'col-md-6'
                    ],
                    'button_link' => [
                        'type' => 'text',
                        'value' => '#',
                        'class' => 'col-md-6',
                        'trans' => false
                    ]
                ],
                'es' => [
                    'heading' => [
                        'type' => 'text',
                        'value' => 'Mejor proveedor de SOLUCIONES',
                        'class' => 'col-md-6'
                    ],
                    'sub_heading' => [
                        'type' => 'text',
                        'value' => 'Excelentes servicios de TI para su éxito',
                        'class' => 'col-md-6'
                    ],
                    'description' => [
                        'type' => 'textarea',
                        'value' => "Consectetur adipiscing elit aenean scelerisque at augue vitae consequat <br> quisque eget congue velit in cursus leo sed sodales est eget turpis.",
                        'class' => 'col-md-12'
                    ],
                    'button_title' => [
                        'type' => 'text',
                        'value' => 'Explora más',
                        'class' => 'col-md-6'
                    ]
                ]
            ]),
            'created_at' => '2024-05-10 22:07:50',
            'updated_at' => '2024-05-14 03:00:36',
            ],

            [
                'id' => 83,
                'component_id' => 23,
                'content' => json_encode([
                    'en' => [
                        'array_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/icon1.png',
                            'class' => 'col-md-6'
                        ],
                        'process_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/icon2.png',
                            'class' => 'col-md-6'
                        ],
                        'process_number' => [
                            'type' => 'text',
                            'value' => '3',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Development',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "In a free hour, when our power of choice is untrammelled and when nothing prevents\\r\\n\\t\\t\\t\\t\\t\\t\\tdolor\\r\\n\\t\\t\\t\\t\\t\\t\\tsit amet, consectetur",
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'process_number' => [
                            'type' => 'text',
                            'value' => '3',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Desarrollo',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "En una hora libre, cuando nuestro poder de elección está libre y cuando nada impide\\r\\ndolor\\r\\nsentarse amet, conctetur",
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-05-11 14:00:10',
                'updated_at' => '2024-05-14 20:35:06',
            ],
            [
                'id' => 84,
                'component_id' => 24,
                'content' => json_encode([
                    'en' => [
                        'array_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/icon3.png',
                            'class' => 'col-md-6'
                        ],
                        'process_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/icon4.png',
                            'class' => 'col-md-6'
                        ],
                        'process_number' => [
                            'type' => 'text',
                            'value' => '4',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Testing & Quality Assurance',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "In a free hour, when our power of choice is untrammelled and when nothing prevents\\r\\n\\t\\t\\t\\t\\t\\t\\tdolor\\r\\n\\t\\t\\t\\t\\t\\t\\tsit amet, consectetur",
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'process_number' => [
                            'type' => 'text',
                            'value' => '4',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Pruebas y aseguramiento de calidad',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "En una hora libre, cuando nuestro poder de elección está libre y cuando nada impide\\r\\ndolor\\r\\nsentarse amet, conctetur",
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-05-11 14:05:30',
                'updated_at' => '2024-05-14 20:37:15',
            ],
            [
                'id' => 85,
                'component_id' => 25,
                'content' => json_encode([
                    'en' => [
                        'array_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/icon5.png',
                            'class' => 'col-md-6'
                        ],
                        'process_icon' => [
                            'type' => 'img',
                            'value' => 'general/images/icon6.png',
                            'class' => 'col-md-6'
                        ],
                        'process_number' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Deployment & Maintenance',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "In a free hour, when our power of choice is untrammelled and when nothing prevents\\r\\n\\t\\t\\t\\t\\t\\t\\tdolor\\r\\n\\t\\t\\t\\t\\t\\t\\tsit amet, consectetur",
                            'class' => 'col-md-12'
                        ]
                    ],
                    'es' => [
                        'process_number' => [
                            'type' => 'text',
                            'value' => '5',
                            'class' => 'col-md-6'
                        ],
                        'title' => [
                            'type' => 'text',
                            'value' => 'Despliegue y mantenimiento',
                            'class' => 'col-md-12'
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'value' => "En una hora libre, cuando nuestro poder de elección está libre y cuando nada impide\\r\\ndolor\\r\\nsentarse amet, conctetur",
                            'class' => 'col-md-12'
                        ]
                    ]
                ]),
                'created_at' => '2024-05-11 14:10:55',
                'updated_at' => '2024-05-14 20:40:00',
            ],
            [
            'id' => 88,
            'component_id' => 19,
            'content' => json_encode([
                'en' => [
                    'left_line' => [
                        'type' => 'img',
                        'value' => 'general/images/wfHxFfHI2xI62jsg25EB.png',
                        'class' => 'col-md-6',
                    ],
                    'solid_right_down' => [
                        'type' => 'img',
                        'value' => 'general/images/yiFCdKB5ZG4m35GZ0Vg2.png',
                        'class' => 'col-md-6',
                    ],
                    'solid_right_up' => [
                        'type' => 'img',
                        'value' => 'general/images/Gi5hMdVOGMK903R0o2yl.png',
                        'class' => 'col-md-6',
                    ],
                    'right_shape' => [
                        'type' => 'img',
                        'value' => 'general/images/bmaBGRE1VRPceZFzP0ub.png',
                        'class' => 'col-md-6',
                    ],
                    'circle_solid' => [
                        'type' => 'img',
                        'value' => 'general/images/BngX6ulmrpt2BkKgdNro.png',
                        'class' => 'col-md-6',
                    ],
                    'circle_regular' => [
                        'type' => 'img',
                        'value' => 'general/images/cCUaHj29ZjMF6SpR75iX.png',
                        'class' => 'col-md-6',
                    ],
                    'background' => [
                        'type' => 'img',
                        'value' => 'general/images/Mp4liZx4rXD73B5mfxoK.jpg',
                        'class' => 'col-md-12',
                    ],
                    'heading' => [
                        'type' => 'text',
                        'value' => 'We Convert Concepts Into Technology',
                        'class' => 'col-md-6',
                    ],
                    'sub_heading' => [
                        'type' => 'text',
                        'value' => 'TECHNOLOGY RELATED CONSULTANCY',
                        'class' => 'col-md-6',
                    ],
                    'summary' => [
                        'type' => 'textarea',
                        'value' => 'Consectetur adipiscing elit Aenean scelerisque at augue vitae consequat <br> quisque\\r\\n                                    eget\\r\\n                                    congue velit in cursus leo Sed\\r\\n                                    sodales',
                        'class' => 'col-md-12',
                    ],
                    'button_text' => [
                        'type' => 'text',
                        'value' => 'Explore More',
                        'class' => 'col-md-6',
                    ],
                    'button_link' => [
                        'type' => 'text',
                        'value' => '/about',
                        'class' => 'col-md-6',
                        'trans' => false,
                    ],
                ],
                'es' => [
                    'heading' => [
                        'type' => 'text',
                        'value' => 'Convertimos conceptos en',
                        'class' => 'col-md-6',
                    ],
                    'sub_heading' => [
                        'type' => 'text',
                        'value' => 'CONSULTORÍAD RELACIONADA CON TECNOLOGÍA',
                        'class' => 'col-md-6',
                    ],
                    'summary' => [
                        'type' => 'textarea',
                        'value' => 'Consectetur adipiscing elit Aenean scelerisque at augue vitae consequat <br> quisque\\r\\n                                     eget\\r\\n                                     congue velit en cursus leo Sed\\r\\n                                     refrescos',
                        'class' => 'col-md-12',
                    ],
                    'button_text' => [
                        'type' => 'text',
                        'value' => 'Explora más',
                        'class' => 'col-md-6',
                    ],
                ],
            ]),
            'created_at' => '2024-05-11 22:47:46',
            'updated_at' => '2024-05-14 22:37:41',
        ]
        ];
        //dd($ComponentData);
        foreach ($ComponentData as $data) {
            DB::table('component_contents')->insert($data);
        }
        
    }
}
