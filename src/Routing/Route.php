<?php

namespace Babanesma\Routing;

use Illuminate\Routing\Route as IlluminateRoute;

Class Route extends IlluminateRoute
{
    public static function getValidators()
    {
        $oldValidators = static::getValidators();
        
        return array_merge($oldValidators , [new VariableValidator()]);
    }
}