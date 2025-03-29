<?php

$router->get('/', function () {
    return response()->json(['message' => 'Lumen is working!']);
});
$router->get('/users', ['uses' => 'UserController@getUsers']);

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/api/users', 'UserController@index');//get all users records
    $router->post('/users', 'UserController@addUser');//create new user record
    $router->get('/users/{id}', 'UserController@show');//get user by id
    $router->put('/users/{id}', 'UserController@update');//update user record
    $router->patch('/users/{id}', 'UserController@update');//update user record
    $router->delete('/users/{id}', 'UserController@delete');//delete record
});

use Illuminate\Support\Facades\Http;

$router->get('/test-api', function () {
    $response = Http::get('http://localhost:8000/api/users');
    return $response->json();
});

$router->get('/clear-cache', function () {
    \Illuminate\Support\Facades\Cache::flush();
    return "Cache cleared!";
});

$router->get('/', function () {
    return response()->json(['message' => 'Lumen Service is running!']);
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', function () {
        return response()->json([
            ['id' => 1, 'name' => 'Charlie'],
            ['id' => 2, 'name' => 'David']
        ]);
    });
});


