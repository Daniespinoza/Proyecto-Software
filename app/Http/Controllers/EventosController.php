<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Event;
use App\Eventtype;
use App\Jornada;
use App\Turn;
use App\Turndetail;
use App\Exhibitor;
use App\Establishment;
use App\Staff;
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
        $evn = Event::all();
        $evn->toJson();
        return view('eventos.create',compact('establecimientos','evento' ,'evn'));
      }
      else{
        return redirect('/');
      }

    }

    public function ingresaEvento()
    {

      if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){
        $establecimientos = Establishment::all()->toArray();
        $evento = Eventtype::all()->toArray();
        $evn = Event::all();
        $evn->toJson();
        return view('eventos.ingresa',compact('establecimientos','evento' ,'evn'));
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

          $user = Auth::user()->id;
          $St = Staff::where('id_user','=',$user)->get();

          if(preg_match("/^[0-9]+$/" , $request->get('tipo_evento') ) ) {

            $evento = new Event([
              'id_tipo_evento'=> $request->get('tipo_evento'),
              'id_personal'=>$St[0]['id'],
              'id_establecimiento'=>$request->get('esta'),
              'cupos'=>$request->get('cupos'),
              'direccion'=> $request->get('direccion'),
              'start'=>$request->get('fecha'),
              'title' => $request->get('nombre')

            ]);

            $evento->save();



          }
          else {

            $eventype = new Eventtype([
              'subtipo'=>$request->get('tipo_evento'),
              'descripcion'=>$request->get('descripcion'),


            ]);
            $eventype->save();
            $eve = Eventtype::where('subtipo','=',$request->get('tipo_evento'))->get();

            $evento = new Event([
              'id_tipo_evento'=> $eve[0]['id'],
              'id_personal'=>$St[0]['id'],
              'id_establecimiento'=>$request->get('esta'),
              'cupos'=>$request->get('cupos'),
              'direccion'=> $request->get('direccion'),
              'start'=>$request->get('fecha'),
              'title' => $request->get('nombre')

            ]);
            $evento->save();
          }

          return view('eventos.calendar');





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
        $evn = Event::all();
        $evn->toJson();

        return view('eventos.prueba',compact('establecimientos','evento' ,'evn'));
      }
      else{
        return redirect('/');
      }

    }

}
