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
Route::get('/', function () {
    return view('index');
});
*/
Auth::routes();

Route::get('events', function () {

    if (Auth::check())
    {
      if (Auth::user()['id_rol'] == 4){
        $expo = App\Exhibitor::where('id_user',Auth::user()->id_rol)->get();
        $turns = App\Turndetail::where('id_expositor',$expo[0]->id)->get();
        $count = 0;
        $id_turnos = array();
        foreach ($turns as $turno) {
            if ($turno->visto == 0) {
              $count++;
            }
            elseif ($turno->confirmacion == 1) {
              array_push($id_turnos,$turno->id_turno);//turnos confirmados por expositor
            }
          }
        $TURNOS = App\Turn::all();
        $eventos_user = array();
        foreach ($TURNOS as $tur) {
          //dd($ev);
            if (in_array($tur->id,$id_turnos)) {
              array_push($eventos_user,$tur->id_evento);
            }
        }

        $eventss = App\Event::all()->toArray();
        $_event = array();
        foreach ($eventss as $ev) {
          if(in_array($ev['id'],$eventos_user)){
            array_push($_event,$ev);
          }
        }
        $event = collect($_event);
        $event->toJson();
        return response($event);
      }
      else{
        $event = App\Event::all();
        $event->toJson();
        return response($event);
      }

}
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


Route::get('/historial_eventos','EventosController@historialEventos')->middleware('personal');
Route::get('/listado_eventos','EventosController@listarEventos')->middleware('personal');
Route::get('/ingresar_evento','EventosController@ingresaEvento')->middleware('personal');
/*Route::get('/ficha_evento','EventosController@getFicha')->middleware('personal');
Route::post('/enviar_ficha','EventosController@setFicha')->middleware('personal');*/

//Route::get('/mi_sueldo','DatosController@getSueldo')->middleware('exhi');




////////////////////
