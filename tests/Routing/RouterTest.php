<?php

use Illuminate\Http\Request;
use Babanesma\Routing\Router;

class RouterTest extends PHPUnit_Framework_TestCase
{
    

    public function testAddingVarsIntoGroupFilter()
    {
        $router = $this->getRouter();
        
        $router->group(["vars" => ['foo' => 'bar']] , function() use ($router){
            $router->get('baz', function () { return 'testing vars'; });
        });
        
        $this->assertEquals('testing vars', $router->dispatch(Request::create('/baz?foo=bar', 'GET'))->getContent());
    }


    
    protected function getRouter()
    {
        return new Router(new Illuminate\Events\Dispatcher);
    }
}
