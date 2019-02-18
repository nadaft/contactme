<?php

namespace Nadaft\ContactMe;

use Illuminate\Support\ServiceProvider;

class ContactMeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/contactme.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contactme');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/contactme.php', 'contactme');
    }

    public function register()
    {
        # code...
    }
}
