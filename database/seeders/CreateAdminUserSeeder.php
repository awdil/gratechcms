<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert admin data
        DB::table('admins')->insert([
            [
                'avatar' => 'general/images/Y6US7crX0NhOA4r4cwEk.png',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'admin@coevs.com',
                'email_verified_at' => null,
                'password' => '$2y$12$szdK7JKgEeKOPgRY0yB3mexoLtnHvTr9bGlHlj6D9nfnyC2LnQKm.',
                'google2fa_secret' => 'eyJpdiI6Ind2TS8zOVRMdFVuOVk4ejZ0TU1SV0E9PSIsInZhbHVlIjoiT1N2NUtKcWVtbGIzaktGYm1KUDRqR3VrbDkrTmdMU2F1anh3Zkd5UGpxND0iLCJtYWMiOiJiNmQwMDQ4OGFjNzkyYWQ3Zjk4MzcyNmE2ZWQ4NjgzNmE5ZWQxNGFkOGRkZTdmYjVmMWQ4NzQ0ODhjMDkxN2Y0IiwidGFnIjoiIn0=',
                'google2fa_enabled' => 0,
                'status' => 1,
                'remember_token' => 'FB2rcXF34LgqzlM7DER6fSyLmLW3eRmlhTgzfpLbpY9foVrmw9h46YxJm5Jr',
                'created_at' => '2024-10-02 21:37:59',
                'updated_at' => '2024-10-22 08:34:32',
            ],
            [
                'avatar' => 'general/images/syAndmUsRKOFlMdk8BzG.png',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$FBCO7rtL7aoC.yCmld0yDO36PTuSGYLlR0WW3PGXZl/r6a1zkodyG',
                'google2fa_secret' => null,
                'google2fa_enabled' => 0,
                'status' => 1,
                'remember_token' => null,
                'created_at' => '2024-10-03 07:22:54',
                'updated_at' => '2024-10-22 08:34:08',
            ],
            [
                'avatar' => 'general/images/3ogxu86DoucfO3gaKLYZ.png',
                'first_name' => 'Lucy',
                'last_name' => 'Green',
                'email' => 'lucy.green@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$qklQanMX/TqjOSam.zdZDu8OwqgWLLyDeaeDsAjnnxWNoUD9qCoGC',
                'google2fa_secret' => null,
                'google2fa_enabled' => 0,
                'status' => 1,
                'remember_token' => 'sN9TiLJH0gwGRd5JwcDioTtJ4ASdiexrKTgISthzTb3Te5YFEAGI99k6DSvj',
                'created_at' => '2024-10-03 07:23:29',
                'updated_at' => '2024-10-22 08:52:49',
            ],
            [
                'avatar' => 'general/images/HlhYhxDu9j2S8d2aUtQk.jpg',
                'first_name' => 'Tom',
                'last_name' => 'White',
                'email' => 'tom.white@mailinator.com',
                'email_verified_at' => null,
                'password' => '$2y$12$JNDs68QKeEcz5RIUl0S8Y.p3zSTObJbANAn/TXAYr3BONCK7QClVq',
                'google2fa_secret' => null,
                'google2fa_enabled' => 0,
                'status' => 1,
                'remember_token' => null,
                'created_at' => '2024-10-03 07:25:07',
                'updated_at' => '2024-10-22 08:54:04',
            ],
            [
                'avatar' => 'general/images/vZsCEQRB2xVFeX5fmSyL.jpg',
                'first_name' => 'Anna',
                'last_name' => 'Bell',
                'email' => 'anna.bell@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$12$yiJ.GwiAaE5xdEj8YvMmzeXtc1/Eyt/8APvKMiaqsHL9IPV.YUlBi',
                'google2fa_secret' => null,
                'google2fa_enabled' => 0,
                'status' => 1,
                'remember_token' => null,
                'created_at' => '2024-10-22 08:55:50',
                'updated_at' => '2024-10-22 08:57:05',
            ],
        ]);
        $superAdmin = Admin::where('email', 'admin@coevs.com')->first(); // Fetch the admin user by email.
        $superAdmin->assignRole('super-admin'); // Assign the 'super-admin' role.

    }
}
