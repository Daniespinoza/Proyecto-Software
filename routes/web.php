<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/contact', 'DatosController@con' )->middleware('exhi');;
Auth::routes();
Route::get('/comuna', function () {
  $event = App\Commune::all();
  $event->toJson();
  return response($event);
});
Route::get('/', 'HomeController@index');
Route::resource('establecimientos','EstablecimientosController');
Route::resource('expositores','ExpositoresController');
Route::resource('personal','PersonalController');
Route::resource('materiales','MaterialesController');
Route::resource('eventos','EventosController');
Route::resource('mis_datos','DatosController');

Route::get('/mi_horario','DatosController@getHorario')->middleware('exhi');
Route::get('/mis_pagos','ExpositoresController@getPagos')->middleware('exhi');
Route::post('/mis_pagos','ExpositoresController@Pagoss')->middleware('exhi');
Route::get('/ingresar_horario','DatosController@setHorario')->middleware('exhi');
Route::post('/horario','DatosController@updateHorario')->middleware('exhi');
Route::get('/mi_historial','DatosController@getHistorial')->middleware('exhi');
Route::post('/historial','DatosController@updateAsistir')->middleware('exhi');
Route::post('/contacto/enviar_mensaje', 'DatosController@store')->middleware('exhi');


Route::get('/generar_pagos','DatosController@pagos')->middleware('personal');
Route::post('/generar_pagos','DatosController@pagoss')->middleware('personal');
Route::get('/ingresar_evento','EventosController@ingresaEvento')->middleware('personal');
Route::get('/historial_eventos','EventosController@historialEventos')->middleware('personal');
Route::get('/listado_eventos','EventosController@listarEventos')->middleware('personal');
Route::get('/ingresar_evento','EventosController@ingresaEvento')->middleware('personal');
Route::get('/asignar_horario/{id}',['uses' => 'EventosController@asignarHorario'])->middleware('personal');
Route::post('/confirmar_turnos','EventosController@confirmaTurnos')->middleware('personal');
Route::get('/ficha_asistencia/{id}',['uses' => 'EventosController@getFicha'])->middleware('personal');
Route::get('/ver_ficha/{id}',['uses' => 'EventosController@getVerFicha'])->middleware('personal');
Route::post('confirmar_ficha','EventosController@confirmarFicha')->middleware('personal');
Route::get('/ver_jornadas','DatosController@getJornadas')->middleware('admin');
Route::post('/actualizar_jornadas','DatosController@setJornadas')->middleware('admin');


////////////////////
