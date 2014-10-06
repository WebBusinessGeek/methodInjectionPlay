<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');


$router->get('/test1', 'HomeController@test1');


$router->get('/test2', 'HomeController@test2');


$router->get('/test3', 'HomeController@test3');
