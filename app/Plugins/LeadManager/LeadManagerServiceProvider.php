<?php

namespace App\Plugins\LeadManager;

use Illuminate\Support\ServiceProvider;

class LeadManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'lead-manager');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
    }

    public function register()
    {
        //
    }
}
