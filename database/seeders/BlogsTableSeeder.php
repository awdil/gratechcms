<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'category_id' => 1,
                'title' => json_encode([
                    'en' => 'What’s the Holding Back the It Solution',
                    'es' => '¿Cuál es la solución para frenar la TI?',
                ]),
                'slug' => 'whats-the-holding-back-the-it-solution',
                'summary' => json_encode([
                    'en' => 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.',
                    'es' => 'Es posible ganar mucho dinero, pero sucederá al mismo tiempo que con el trabajo y el dolor de algunas grandes cosas. De hecho, hasta el más mínimo detalle, nadie debería ejercer ningún tipo de trabajo a menos que alguno de ellos beneficie al paciente. No te apresures y culpes al dolor.',
                ]),
                'content' => json_encode([
                    'en' => '<h3>Tackling the Changes of Retail Industry</h3> ...', // Replace "..." with the full content for brevity
                    'es' => '<h3>Afrontar los cambios de la industria minorista</h3> ...',
                ]),
                'author_id' => 1,
                'tag' => json_encode([
                    ['value' => 'Business'],
                    ['value' => 'SMM'],
                    ['value' => 'Top'],
                ]),
                'cover' => 'general/images/QOfBkZVkbeom5jPBPy6X.jpg',
                'is_active' => 1,
                'created_at' => '2024-03-15 09:57:53',
                'updated_at' => '2024-05-14 21:41:33',
            ],
            [
                'category_id' => 1,
                'title' => json_encode([
                    'en' => 'Keep Your Business Safe & Ensure High Availability.',
                    'es' => 'negocio seguro y garantice una alta disponibilidad.',
                ]),
                'slug' => 'keep-your-business-safe-ensure-high-availability',
                'summary' => json_encode([
                    'en' => 'Consequat Quisque eget congue velit in OF cursus leo sodales IS the euismod quis sapien euismod Consequat Quisque eget congue velit in OF cursus leo sodales IS the euismod quis sapien euismod',
                    'es' => 'Consequat Quisque eget cougue velit en DE cursus leo miembros ES el Euismod quis sapien Euismod',
                ]),
                'content' => json_encode([
                    'en' => '<h3>Tackling the Changes of Retail Industry</h3> ...', // Replace "..." with the full content for brevity
                    'es' => '<h3>Afrontar los cambios de la industria minorista</h3> ...',
                ]),
                'author_id' => 1,
                'tag' => json_encode([
                    ['value' => 'SMM'],
                    ['value' => 'Startup'],
                    ['value' => 'Strategy'],
                ]),
                'cover' => 'general/images/x9Rjxh5b3w3Z3HhdpJ7a.jpg',
                'is_active' => 1,
                'created_at' => '2024-03-16 10:24:05',
                'updated_at' => '2024-05-14 22:35:07',
            ],
        ]);
    }
}
