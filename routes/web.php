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
Route::get('/mis_datos', 'StaffsController@datos')->middleware('auth');

Route::get('/agregar_expositor', 'StaffsController@addexp')->middleware('auth');
Route::get('/ver_expositores', 'StaffsController@viewexp')->middleware('auth');
Route::get('/actualizar_expositor', 'StaffsController@updateexp')->middleware('auth');
Route::get('/eliminar_expositor', 'StaffsController@deleteexp')->middleware('auth');


Route::get('/agregar_establecimiento', 'StaffsController@addestablish')->middleware('auth');
Route::get('/ver_establecimientos', 'StaffsController@viewestablish')->middleware('auth');
Route::get('/actualizar_establecimientos', 'StaffsController@updateestablish')->middleware('auth');
Route::get('/eliminar_establecimiento', 'StaffsController@deleteestablish')->middleware('auth');


Route::get('/agregar_material', 'StaffsController@addmat')->middleware('auth');
Route::get('/ver_materiales', 'StaffsController@viewmat')->middleware('auth');
Route::get('/actualizar_material', 'StaffsController@updatemat')->middleware('auth');
Route::get('/eliminar_material', 'StaffsController@deletemat')->middleware('auth');

Route::get('/agregar_convenio', 'StaffsController@addagree')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index');
