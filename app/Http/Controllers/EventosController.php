<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;
use App\Eventtype;
use App\Jornada;
use App\Turn;
use App\Turndetail;
use App\Exhibitor;
use App\Establishment;
use App\Staff;
use App\Stock;
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
      //dd(Auth::user()['id_rol']);
      if (Auth::user()['id_rol'] == 4){
        $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
        $turns = Turndetail::where('id_expositor',$expo[0]->id)->get();
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
        $TURNOS = Turn::all();
        $eventos_user = array();
        foreach ($TURNOS as $tur) {
          //dd($ev);
            if (in_array($tur->id,$id_turnos)) {
              array_push($eventos_user,$tur->id_evento);
            }
        }

        $eventss = Event::all()->toArray();

        $_event = array();
        //dd($eventos_user);
        foreach ($eventss as $ev) {
          if(in_array($ev['id'],$eventos_user)){
            array_push($_event,$ev);
          }
        }
        //$event = json_encode($_event, JSON_FORCE_OBJECT);
        //$event = App\Event::all();
        //$event->toJson();
        //return response($event);
        $event = collect($_event);
        $event->toJson();
      //  dd($event);
      //  return response($event);
        return view('eventos.index',compact('event','count'));
        }
      else{
        $event = Event::all();
        //dd($event);
        $event->toJson();
        //return response($event);
      //  dd($event);

        return view('eventos.index',compact('event','count'));
      }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      if(Auth::user()->id_rol != 4){
        $establecimientos = Establishment::all()->toArray();
        $evento = Eventtype::all()->toArray();
        $evn = Event::all();
        $evn->toJson();
        //dd($evn);
        return view('eventos.create',compact('establecimientos','evento' ,'evn'));
      }
      else{
        return redirect('/');
      }

    }

    public function ingresaEvento()
    {

      if(Auth::user()->id_rol != 4){
        $establecimientos = Establishment::orderBy('rbd','asc')->get();
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
      if(Auth::user()->id_rol != 4){
        $evento = Event::find($id);
        $turno = Turn::where('id_evento',$evento['id'])->first();
        //dd($turnos[0]['id']);
        $stocks = Stock::where('id_turno',$turno['id'])->get();
        foreach ($stocks as $key) {
          $key->detele();
        }
        $turndetails = Turndetail::where('id_turno',$turno['id'])->get();
        foreach ($turndetails as $key) {
          $key->delete();
        }
        $turno->delete();
        $evento->delete();
        return redirect('listado_eventos');
      }
      else{
        return redirect('/');
      }


    }

    public function asignarHorario($id)
    {
      if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){
        $establecimientos = Establishment::all();
        $eventos = Eventtype::all();
        $tiposevento = Event::all();

        return view('eventos.asignar_turnos',compact('establecimientos','eventos' ,'tiposevento','id'));
      }
      else{
        return redirect('/');
      }

    }

    public function listarEventos()
    {
      if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){
        $establecimientos = Establishment::all();
        $tiposevento = Eventtype::all();
        $eventos = Event::all();
        $hoy = Carbon::now();
        return view('eventos.listado_eventos',compact('establecimientos','eventos' ,'tiposevento','hoy'));
      }
      else{
        return redirect('/');
      }

    }

    public function historialEventos()
    {
      if(Auth::user()->id_rol  != 4){
        $establecimientos = Establishment::all();
        $tiposevento = Eventtype::all();
        $eventos = Event::all();
        $hoy = Carbon::now();



        return view('eventos.historial_eventos',compact('establecimientos','eventos' ,'tiposevento','hoy'));
      }
      else{
        return redirect('/');
      }

    }

}
