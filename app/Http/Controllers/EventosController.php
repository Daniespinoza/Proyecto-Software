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
use App\Disponibilidad;
use Illuminate\Support\Facades\DB;
use App\Material;
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
      if (Auth::user()->id_rol == 4){
        $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
        $turns = Turndetail::where('id_expositor',$expo[0]->id)->where('confirmacion','=',1)->get();
        $count = 0;
        $id_turnos = array();
        $today = Carbon::now();
        foreach ($turns as $turno) {
            if ($turno->visto == 0) {
              $count++;
            }
            array_push($id_turnos,$turno->id_turno);
          }
        $TURNOS = Turn::all();
        $eventos_user = array();
        foreach ($TURNOS as $tur) {
            if (in_array($tur->id,$id_turnos)) {
              array_push($eventos_user,$tur->id_evento);
            }
        }

        $eventss = Event::all()->toArray();

        $_event = array();
        foreach ($eventss as $ev) {
          if(in_array($ev['id'],$eventos_user)){
            array_push($_event,$ev);
          }
        }
        $event = collect($_event);
        $event->toJson();
        return view('eventos.index',compact('event','count'));
        }
      else{
        $event = Event::all();
        $event->toJson();

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
              'title' => $request->get('nombre'),
              'ficha' => false

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
          $event = Event::all();
          $event->toJson();
          return view('eventos.index',compact('event'));


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
        if(Auth::user()->id_rol != 4){
          $evento = Event::find($id);
          $establecimiento = Establishment::where('id',$evento->id_establecimiento)->get();
          //dd($establecimiento[0]['nombre_establecimiento']);
          $nombre_est = $establecimiento[0]['nombre_establecimiento'];
          $id_est = $establecimiento[0]['rbd'];
          $tipo = Eventtype::where('id',$evento->id_tipo_evento)->get();

          $tipo_est = $tipo[0]['subtipo'];
          $establecimientos = Establishment::all();
          $et = Eventtype::all();

          $personal = Staff::where('id_user',Auth::user()->id)->get();

          //dd($personal[0]['id']);

          return view('eventos.editar_evento',compact('evento','nombre_est','tipo_est','id','establecimientos','id_est','tipo','et','personal','establecimiento'));

        }else{
          return redirect('/');
        }
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
      if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){

        $evento = Event::find($id);
        //dd($request->get('start'));
        $evento->id_tipo_evento = $request->get('id_tipo_evento');
        $evento->id_personal = $request->get('id_personal');
        $evento->id_establecimiento = $request->get('id_establecimiento');
        $evento->direccion = $request->get('direccion');
        $evento->cupos = $request->get('cupos');
        $evento->start = $request->get('start');
        $evento->title = $request->get('title');
        $evento->ficha = false;
        //dd($evento);
        $evento->save();
        return redirect('/listado_eventos');
      }else{
        return redirect('/');
      }

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
          if($key != null){
            $key->delete();

          }
        }
        if($turno != null){
          $turno->delete();

        }
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
        $ev = Event::find($id);
        //dd($ev['start']);
        $expositores = Exhibitor::orderBy('alu_nombre','asc')->get();
        //dd($expositores);
        $detalles = Turndetail::all()->toArray();
        $disponibilidades = Disponibilidad::all()->toArray();

        $cant_exp = DB::table('exhibitors')->count();
        $_texpo = array(); //turnos expositor

        $hoy = Carbon::now();

        //get event day
        $semana = array(array('Mon','lunes'), array('Tue','martes'), array('Wed','miercoles'),
                        array('Thu','jueves'), array('Fri','viernes'), array('Sat','sabado'), array('Sun','domingo'));

        foreach ($semana as $dia) {
            if(Carbon::parse($ev['start'])->format('D') == $dia[0]){
              $dia_ev = $dia[1];
              $hora_ev = Carbon::parse($ev['start'])->format('H:m');
            }
        }


        //get expositores Disponibles
        $_disp = array();
        foreach ($disponibilidades as $key) {
          $disp = array();
          if($key[$dia_ev] == 'Todo el Día'){
            array_push($disp,$key['id_expositor']);
            array_push($_disp,$disp);
          }
          if ($key[$dia_ev] == 'Mañana') {
            if (Carbon::parse($ev['start'])->format('H:m') < '12:00') {
              array_push($disp,$key['id_expositor']);
              array_push($_disp,$disp);
            }
          }
          if ($key[$dia_ev] == 'Tarde') {
            if (Carbon::parse($ev['start'])->format('H:m') > '12:00') {
              array_push($disp,$key['id_expositor']);
              array_push($_disp,$disp);
            }
          }
        }

        //arreglo con id y expositor disponible
        $all = array();
        foreach ($_disp as $key) {
          $count = 0;
          $_all = array();
          //dd($key[0]);
          foreach ($detalles as $det) {
            if(($key[0] == $det['id_expositor']) && ($ev['start'] > $hoy)){
              if ($det['confirmacion'] == 1) {
                $count++;
              }
            }
          }
          array_push($_all,$key[0]);
          array_push($_all,$count);
          array_push($all,$_all);
        }

        //arreglo con id, expositor y cantidad de turnos confirmados
        $fin = array();
        foreach ($all as $key) {
          $_fin = array();
          foreach($expositores as $e){
            if($key[0] == $e['id']){
              array_push($_fin,$e['id']);
              array_push($_fin,$e['alu_nombre']);
              array_push($_fin,$e['alu_apellido_paterno']);
              array_push($_fin,$e['alu_apellido_materno']);
              array_push($_fin,$key[1]);
              array_push($fin,$_fin);
            }
          }
        }

        $_turns = array();
        for ($i=0; $i < count($fin) ; $i++) {
          if(!in_array($fin[$i][4],$_turns)){
            array_push($_turns,$fin[$i][4]);
          }
        }
        sort($_turns);
        $_cantidad = count($fin);

        //verificar si ya hubo turnos asignados
        $turnexist = Turn::where('id_evento',$ev->id)->get();
        if(count($turnexist)){
          $nuevo_array = array();
          $turnosexist = Turndetail::where('id_turno',$turnexist[0]['id'])->get();
          for ($i=0; $i < $_cantidad ; $i++) {
            $esta = false;
            for ($j=0; $j < count($turnosexist) ; $j++)
              if($turnosexist[$j]['id_expositor'] == $fin[$i][0] ){
                $esta = true;
              }
            if($esta == false){
              array_push($nuevo_array,$fin[$i]);
            }
          }
          $fin = $nuevo_array; //nuevo fin sin los expositores existentes en el turno
          $_cantidad = count($fin);
        }

        return view('eventos.asignar_turnos',compact('establecimientos','eventos' ,'tiposevento','id','ev','fin','_turns','_cantidad','dia_ev','hora_ev'));
      }
      else{
        return redirect('/');
      }

    }


    public function confirmaTurnos(Request $request)
    {
      if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2){
        //dd($request);
        $json = json_decode($request->get('p'));
        $jornada;
        if($request->get('dia_ev') == 'sabado'){
          $jornada = 4;
        }
        if($request->get('dia_ev') == 'domingo'){
          $jornada = 6;
        }
        else{
          if($request->get('dia_ev') == 'lunes' && $request->get('hora_ev') >= '18:00'){
            $jornada = 3;
          }
          else {
            $jornada = 1;
          }
        }
        $existe_turno = Turn::where('id_evento',$request->get('id_evento'))->get();
        if(!count($existe_turno)){
          $turno = new Turn([
            'id_jornada' => $jornada,
            'id_evento' => $request->get('id_evento'),
            'transporte' => null,
            'tipo_transporte' => null,
          ]);
          $turno->save();
        }

        $_turn = Turn::where('id_evento',$request->get('id_evento'))->get();
        $id_turno = $_turn[0]['id'];
        //dd($id_turno);
        //dd($json[0]->Apellido_Paterno);
        $cont = 0;
        foreach ($json as $expo) {
           $detail = new Turndetail([
             'id_turno' => $id_turno,
             'id_expositor' => $expo->ID,
             'confirmacion' => 0,
             'asistencia' => 0,
             'encargado_turno' => null,
             'dinero_turno' => null,
             'visto' => 0,
             'pagado' => 0,
           ]);
           $detail->save();
           $cont++;
        }

        $ev_cup = Event::find($request->get('id_evento'));
        $current = $ev_cup->cupos;
        $ev_cup->cupos = $current - $cont;
        $ev_cup->save();

        $establecimientos = Establishment::all();
        $tiposevento = Eventtype::all();
        $eventos = Event::all();
        $hoy = Carbon::now();
        $turnos = Turn::all();
        return view('eventos.listado_eventos',compact('establecimientos','eventos' ,'tiposevento','hoy','turnos'));

      }else{
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
        $turnos = Turn::all();
        return view('eventos.listado_eventos',compact('establecimientos','eventos' ,'tiposevento','hoy','turnos'));
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

    public function getFicha($id)
    {
      if(Auth::user()->id_rol != 4){
        $event = Event::find($id);
        $turno = Turn::where('id_evento',$id)->get();
        $expo_turno = Turndetail::where('id_turno',$turno[0]->id)->get();
        $expositores = array();
        foreach($expo_turno as $key){
          $exp = Exhibitor::find($key['id_expositor']);
          array_push($expositores,$exp);
        }
        $expos = collect($expositores);
        $expos->toJson();
        $materiales = Material::orderBy('descripcion','asc')->get();
        $materiales->toJson();

        return view('eventos.ficha_evento',compact('event','turno','expos','materiales'));
      }else{
        return redirect('/');
      }
    }

    public function confirmarFicha(Request $request)
    {
      if(Auth::user()->id_rol != 4){
        $json_expositores = $request->get('expos');
        $json_materiales = $request->get('mates');
        $encargado = $request->get('enc_t');
        $dinero = $request->get('money');
        $transporte = $request->get('trsp');
        $id_evento = $request->get('evento');

        $expositores= json_decode($json_expositores);
        $materiales= json_decode($json_materiales);

        $turno = Turn::where('id_evento',$id_evento)->get();

        $t = Turn::find($turno[0]->id);
        $t->tipo_transporte = $transporte;
        $t->save();


        foreach($materiales as $material){
          $mat = Material::find($material->id);
          $mat->stock_total = $material->disponibles - $material->utilizados;
          $mat->save();
        }

        foreach($expositores as $expositor){
          $turno_expo = Turndetail::where('id_turno',$t->id)->where('id_expositor',$expositor->id)->get();
          $up_t = Turndetail::find($turno_expo[0]->id);

          if($expositor->firma == 'false'){ $up_t->asistencia = 0; }
          if($expositor->firma =='true'){ $up_t->asistencia = 1; }
          else{}

          if($encargado == $expositor->id){
            $up_t->encargado_turno = 1;
            $up_t->dinero_turno = $dinero;
          }else{}

          if($expositor->polera == 'false'){ $up_t->polera = 0; }
          if($expositor->polera =='true'){ $up_t->polera = 1; }
          else{}

          if($expositor->poleron == 'false'){ $up_t->poleron = 0; }
          if($expositor->poleron =='true'){ $up_t->poleron = 1; }
          else{}


          if($expositor->chaqueta == 'false'){ $up_t->chaqueta = 0; }
          if($expositor->chaqueta =='true'){ $up_t->chaqueta = 1; }
          else{}

          $up_t->save();
        }

        $evento = Event::find($id_evento);
        $evento->ficha = 1;
        $evento->save();

        $establecimientos = Establishment::all();
        $tiposevento = Eventtype::all();
        $eventos = Event::all();
        $hoy = Carbon::now();

        return view('eventos.historial_eventos',compact('establecimientos','eventos' ,'tiposevento','hoy'));


      }else{
        return redirect('/');
      }
    }



}
