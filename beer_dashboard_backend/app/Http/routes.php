<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_alc_beer', 'apiRestDataBeersController@data_alcohol');
Route::get('/data_alc_max_beer', 'apiRestDataBeersController@data_max_alcohol');
Route::get('/data_amar_max_beer', 'apiRestDataBeersController@data_max_amargor');
