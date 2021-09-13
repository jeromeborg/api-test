<?php


// https://auth0.com/blog/developing-restful-apis-with-lumen/

/* KEY
use Illuminate\Support\Str;
return Str::random(32);
*/
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


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('reactblogs', 'ReactblogController@store');
    $router->get('reactblogs', 'ReactblogController@index');
    $router->get('reactblogs/{id}', 'ReactblogController@show');
    $router->put('reactblogs/{id}', 'ReactblogController@update');
    $router->delete('reactblogs/{id}', 'ReactblogController@destroy');
    
});
