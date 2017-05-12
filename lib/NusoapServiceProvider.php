<?php

namespace SuperIbm\Nusoap;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;


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

    }

    public function provides()
    {

    }
}
