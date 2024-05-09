<?php

namespace BlissJaspis\Dana;

use Illuminate\Support\ServiceProvider;

class DanaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/dana.php' => config_path('dana.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->app->singleton(Dana::class);

        $this->mergeConfigFrom(__DIR__.'/../config/dana.php', 'dana');
    }
}