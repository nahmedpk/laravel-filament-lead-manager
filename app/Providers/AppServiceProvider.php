<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
		$plugins = glob(app_path('Plugins/*'), GLOB_ONLYDIR);

		foreach ($plugins as $pluginPath) {
		    $provider = 'App\\Plugins\\' . basename($pluginPath) . '\\' . basename($pluginPath) . 'ServiceProvider';

		    if (class_exists($provider)) {
		        $this->app->register($provider);
		    }
		}

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
