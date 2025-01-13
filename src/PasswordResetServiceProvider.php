<?php

namespace Prodevel\NovaPasswordReset;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PasswordResetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/nova-password-reset'),
        ], 'nova-password-reset-views');
    }

    public function register()
    {
        //
    }
}