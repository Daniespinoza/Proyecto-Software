<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
/*Route::get('/agregar_expo', function () {
    return view('Agregar_Expo');
});*/

Route::get('/agregar_expositor', 'Agregar_expoController@all');
