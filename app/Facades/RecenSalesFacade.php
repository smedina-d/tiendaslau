<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class RecenSalesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'recent';
    }
}
