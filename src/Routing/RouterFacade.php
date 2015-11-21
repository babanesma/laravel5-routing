<?php

namespace Babanesma\Routing;

use Illuminate\Support\Facades\Facade;

class RouterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}