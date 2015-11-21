<?php

namespace Babanesma\Routing;

use Illuminate\Routing\Router as LaravelRouter;
use Matching\VariableValidator;

class Router extends LaravelRouter
{
    public static function getValidators()
    {
        $oldValidators = static::getValidators();
        
        return array_merge($oldValidators , [new VariableValidator()]);
    }

}