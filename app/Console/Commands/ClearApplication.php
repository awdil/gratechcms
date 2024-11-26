<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearApplication extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear application cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Clearing compiled views...');
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('optimize:clear');
        $this->info('Application optimization complete.');
    }
}
