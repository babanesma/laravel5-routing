<?php

namespace Babanesma\Routing;

use Illuminate\Routing\Router as LaravelRouter;

class Router extends LaravelRouter
{
    public static function mergeGroup($new, $old)
    {
        $newGroup = parent::mergeGroup($new, $old);
        if(isset($old['vars'])){
            $newGroup = array_merge($newGroup , $old['vars']);
        }
        return $newGroup;
    }
}
