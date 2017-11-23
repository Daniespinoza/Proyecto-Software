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
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/mis_datos', 'StaffsController@datos');

Route::get('/agregar_expositor', 'StaffsController@addexp');
Route::get('/ver_expositores', 'StaffsController@viewexp');
Route::get('/actualizar_expositor', 'StaffsController@updateexp');
Route::get('/eliminar_expositor', 'StaffsController@deleteexp');


Route::get('/agregar_establecimiento', 'StaffsController@addestablish');
Route::get('/ver_establecimientos', 'StaffsController@viewestablish');
Route::get('/actualizar_establecimientos', 'StaffsController@updateestablish');
Route::get('/eliminar_establecimiento', 'StaffsController@deleteestablish');


Route::get('/agregar_material', 'StaffsController@addmat');
Route::get('/ver_materiales', 'StaffsController@viewmat');
Route::get('/actualizar_material', 'StaffsController@updatemat');
Route::get('/eliminar_material', 'StaffsController@deletemat');

Route::get('/agregar_convenio', 'StaffsController@addagree');

Auth::routes();

Route::get('/', 'HomeController@index');
