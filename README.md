# laravel5-routing

Simple package to provide some changes in laravel 5 routing

## Installation

1- Add this line to composer.json and run `composer update`
```
"babanesma/laravel5-routing": "dev-master"
```

2- Add this line to bootstrap\app.php

```
$app->singleton('router', Babanesma\Routing\Router::class);
```

3- Add new router rule
```
Route::group(["vars" => ['foo' => 'bar']], function() use ($router) {
    $router->get('baz', function () {
        return 'testing vars';
    });
});
```

4- visit your site at `/baz?foo=bar` , you should see `testing vars`
