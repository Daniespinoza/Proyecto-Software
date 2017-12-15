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
/*
Route::get('/ruta', function () {
    return view('home');
});
*/

Auth::routes();

Route::get('/comuna', function () {
  $event = App\Commune::all();
  $event->toJson();
  return response($event);
});


// QUESTION: Debemos crear nuevos campos en la base de datos
// TEMP: Como pasar una tabla de datos a json
// IDEA: Crear nuevos campo en la tabla eventos


Route::get('/', 'HomeController@index');

Route::resource('establecimientos','EstablecimientosController');
Route::resource('expositores','ExpositoresController');
Route::resource('personal','PersonalController');
Route::resource('materiales','MaterialesController');
Route::resource('eventos','EventosController');
Route::resource('mis_datos','DatosController');

Route::get('/generar_pagos','DatosController@pagos')->middleware('personal');
Route::post('/generar_pagos','DatosController@pagoss')->middleware('personal');

Route::get('/mi_horario','DatosController@getHorario')->middleware('exhi');
Route::get('/mis_pagos','ExpositoresController@getPagos')->middleware('exhi');
Route::get('/ingresar_horario','DatosController@setHorario')->middleware('exhi');
Route::post('/horario','DatosController@updateHorario')->middleware('exhi');
Route::get('/mi_historial','DatosController@getHistorial')->middleware('exhi');
Route::post('/historial','DatosController@updateAsistir')->middleware('exhi');

Route::get('/ingresar_evento','EventosController@ingresaEvento')->middleware('personal');
Route::get('/historial_eventos','EventosController@historialEventos')->middleware('personal');
Route::get('/listado_eventos','EventosController@listarEventos')->middleware('personal');
Route::get('/ingresar_evento','EventosController@ingresaEvento')->middleware('personal');
Route::get('/asignar_horario/{id}',['uses' => 'EventosController@asignarHorario'])->middleware('personal');
Route::post('/confirmar_turnos','EventosController@confirmaTurnos')->middleware('personal');
Route::get('/ficha_asistencia/{id}',['uses' => 'EventosController@getFicha'])->middleware('personal');
//Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');


/*Route::get('/ficha_evento','EventosController@getFicha')->middleware('personal');
Route::post('/enviar_ficha','EventosController@setFicha')->middleware('personal');*/

//Route::get('/mi_sueldo','DatosController@getSueldo')->middleware('exhi');



////////////////////
