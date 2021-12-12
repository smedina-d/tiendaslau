<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TinyCart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'build';
    }
}
