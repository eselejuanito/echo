<?php

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

$router->get('data', 'DataController@echo');
$router->post('data', 'DataController@echo');
$router->put('data', 'DataController@echo');
$router->patch('data', 'DataController@echo');
$router->delete('data', 'DataController@echo');
