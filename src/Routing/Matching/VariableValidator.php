<?php

namespace Babanesma\Routing\Matching;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Matching\ValidatorInterface;

class VariableValidator extends ValitorInterface
{
    /**
     * Matches a route with a given variable 
     * 
     * @param  Route   $route   
     * @param  Request $request 
     * @return bool          
     */
    public function matches(Route $route, Request $request)
    {
        return true;
    }
}