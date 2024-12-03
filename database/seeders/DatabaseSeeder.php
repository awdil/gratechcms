<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(ComponentContentsSeeder::class);
        $this->call(DepositMethodsSeeder::class);
        $this->call(NavigationSeeder::class);
        $this->call(NotifyTemplatesSeeder::class);
        $this->call(PageComponentsSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(PaymentGatewaySeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(PluginsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SiteCustomSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(SupportCategorySeeder::class);
        $this->call(TaskSeeder::class);
    }
}
