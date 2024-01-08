<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class LogoutAllUsers extends Command
{
    protected $signature = 'auth:logout-all';
    protected $description = 'Log out all users';

    public function handle()
    {
        Cache::flush(); // Optional: Clear cache if necessary
        Session::regenerate(true);

        $this->info('All users have been logged out.');
    }
}
