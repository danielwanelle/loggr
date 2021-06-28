<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        
        // Log
        $router->group(
            ['prefix' => 'log'],
            function () use ($router) {
                $router->get('/', 'LogController@list');
                $router->post('/', 'LogController@create');
            }
        );

        // Category
        $router->group(
            ['prefix' => 'category'],
            function () use ($router) {
                $router->get('/', 'CategoryController@list');
                $router->post('/', 'CategoryController@create');
            }
        );
    }
);
