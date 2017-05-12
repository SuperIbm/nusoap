<?php

namespace SuperIbm\Nusoap;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use SuperIbm\Nusoap\Soapclient;

class NusoapServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/config/nusoap.php' => config_path('nusoap.php')
        ], 'config');
    }

    public function register()
    {
        $this->app->bind('Nusoap', function($app) {
            return new Soapclient();
        });
    }

    public function provides()
    {

    }
}
