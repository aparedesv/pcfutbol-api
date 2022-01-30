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

/* api */
$router->post('auth/signin', 'AuthController@signin');

$router->group(['middleware' => 'auth', 'prefix' => 'api'], function () use ($router) {

    // dashboard
    $router->post('home', 'PcFutbol\DashboardController@index');

    // clubs
    $router->post('club/{id}', 'PcFutbol\ClubController@show');

    // teams
    $router->post('team/{id}', 'PcFutbol\TeamController@show');
    $router->post('teams/new', 'PcFutbol\TeamController@insert');

    // people
    $router->post('people', 'PcFutbol\PersonController@index');
});
