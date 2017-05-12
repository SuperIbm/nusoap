<?php

namespace SuperIbm\Nusoap\Facades;

use Illuminate\Support\Facades\Facade;

class Nusoap extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Nusoap';
    }

}
