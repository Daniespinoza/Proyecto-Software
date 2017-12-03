<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Event;
use App\Eventtype;
use App\Subtype;
use App\Jornada;
use App\Turn;
use App\Turndetail;
use App\Exhibitor;
use App\Establishment;
use Auth;


class EventosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eventos.calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){
          $establecimientos = Establishment::all()->toArray();
          $evento = Eventtype::all()->toArray();

          return view('eventos.create',compact('establecimientos','evento'));
        }
        else{
          return redirect('/');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){

          $eventype = new Eventtype([
            'tipo_evento'=>$request->get('tipo_evento'),
            'descripcion'=>$request->get('descripcion')

          ]);
          $evento = new Event([
            'id_tipo_evento'=> $request->get(),
            'id_personal'=>$request->get(),
            'id_establecimiento'=>$request->get(),
            'cupos'=>$request->get(),
            'fecha_inicio'=>$request->get()

          ]);


        }
        else {
          return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function asignarHorario()
    {
      if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){
        $establecimientos = Establishment::all()->toArray();
        $evento = Eventtype::all()->toArray();
        $sub = Subtype::all()->toArray();

        return view('eventos.prueba',compact('establecimientos','evento','sub'));
      }
      else{
        return redirect('/');
      }

    }

}
