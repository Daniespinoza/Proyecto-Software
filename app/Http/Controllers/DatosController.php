<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate \ Support \ Facades \ Auth;
use Illuminate\Support\Facades\DB;

use App\Exhibitor;
use App\User;
use App\Commune;
use App\Carrera;
use App\Region;
use App\Staff;
use App\Disponibilidad;
use App\Event;
use App\Eventtype;
use App\Establishment;
use App\Jornada;
use App\Turn;
use App\Turndetail;



class DatosController extends Controller
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
      $user = Auth::id();

      if(Auth::user()->id_rol == 4)
      {
        $expo = Exhibitor::where('id_user','=',$user)->first();
        $nombre = $expo->alu_nombre." ".$expo->alu_apellido_paterno." ".$expo->alu_apellido_materno;
        $correo=$expo->alu_email;
        $rut = $expo->alu_rut;
        $array = array('nombre' => $nombre,'correo' =>$correo,'rut'=>$rut);
        $carrera = Carrera::where('id',$expo['id_carrera'])->first();
        $comuna = Commune::where('id',$expo['id_comuna'])->first();
        $region = Region::where('id',$comuna['id_region'])->first();
        $comunas = Commune::all()->toArray();
        $regions = Region::all()->toArray();

        if (Auth::user()->id_rol == 4){
          $exp = Exhibitor::where('id_user',Auth::user()->id)->get();
          $turns = Turndetail::where('id_expositor',$exp[0]->id)->get();
        //  dd($turns);
          $count = 0;
          foreach ($turns as $turno) {
              if ($turno->visto == 0) {
                $count++;
              }
          }
        }

        return  view('datos.mis_datos',compact('expo','array','carrera','comuna','region','user','comunas','regions','count'));

      }
      else {
        $staffs = Staff::where('id_user','=',$user)->first();
        $nombre = $staffs->nombre." ".$staffs->apellido_paterno." ".$staffs->apellido_materno;
        $correo = $staffs->correo;
        $rut = $staffs->rut;
        $array = array('nombre' => $nombre,'correo' =>$correo,'rut'=>$rut);
        $comuna = Commune::where('id',$staffs['id_comuna'])->first();
        $region = Region::where('id',$comuna['id_region'])->first();
        $comunas = Commune::all()->toArray();
        $regions = Region::all()->toArray();
        return  view('datos.mis_datos',compact('array','comuna','region','user','comunas','regions'));

      }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $request,$id)
    {

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
       $pass = $request->get('nueva_password');
       $dir = $request->get('txtDireccion');

    if($pass != ""){
       $pass = $request->get('nueva_password');
       $pass2= $request->get('confirmacion_password');
       if($pass == $pass2){

        $user = User::where('id','=',$id)->first();
        $user -> password = bcrypt($request->get('nueva_password'));
        $user -> save();
        return redirect('mis_datos');
      }
      else {
          print 'alert("mensaje");';
          return redirect('mis_datos');
      }
    }
    if($dir =!""){
      $expo = Exhibitor::where('id_user','=',$id)->first();
      $com = $request ->get('selectComuna');
      $tel = $request -> get ('txtTelefono');
      $dir = $request->get('txtDireccion');
      $expo ->id_comuna = $com;
      $expo ->direccion = $dir;
      $expo ->alu_celular = $tel;
      $expo->save();
      return redirect('mis_datos');

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
        //
    }


    public function getHorario()
    {
      $user = Auth::user()->id;
      $expositor = Exhibitor::where('id_user',$user)->get();
      //dd($expositor[0]['id']);
      $id = $expositor[0]['id'];
      //dd($id);
      //$hor = Disponibilidad::all();
      //dd($hor);
      $horario = Disponibilidad::where('id_expositor',$id)->first();
      //dd($horario);
      if ($horario == null) {

        return redirect('/ingresar_horario');
      }
      else {
        //dd([$expositor,$id,$horario['lunes']]);
        if (Auth::user()->id_rol == 4){
          $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
          $turns = Turndetail::where('id_expositor',$expo[0]->id)->get();
        //  dd($turns);
          $count = 0;
          foreach ($turns as $turno) {
              if ($turno->visto == 0) {
                $count++;
              }
          }
        }
        return view('datos.mi_horario',compact('expositor','horario','id','count'));
      }

    }
    public function setHorario()
    {

      $user = Auth::user()->id;
      $expositor = Exhibitor::where('id_user',$user)->get();
      $id = $expositor[0]['id'];
      $horario = Disponibilidad::where('id_expositor',$id)->first();
      //dd($horario);
      if($horario == null){
        //dd([$expositor,$id,$horario['lunes']]);
        if (Auth::user()->id_rol == 4){
          $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
          $turns = Turndetail::where('id_expositor',$expo[0]->id)->get();
        //  dd($turns);
          $count = 0;
          foreach ($turns as $turno) {
              if ($turno->visto == 0) {
                $count++;
              }
          }
        }
        return view('datos.agregar_horario',compact('expositor','horario','id','count'));
      }
      else {
        return redirect('/mi_horario');
      }
    }
    public function updateHorario(Request $request)
    {
      //dd($request->get('lunes'));
      $user = Auth::user()->id;
      $expositor = Exhibitor::where('id_user',$user)->get();
      //dd($expositor[0]['id']);
      $id = $expositor[0]['id'];
      //dd($id);
      //$hor = Disponibilidad::all();
      //dd($hor);
      $horario = Disponibilidad::where('id_expositor',$id)->get();
      //dd($horario);

      $dias = array();
      $lu = $request->get('lunes');
      $ma = $request->get('martes');
      $mi = $request->get('miercoles');
      $ju = $request->get('jueves');
      $vi = $request->get('viernes');
      $sa = $request->get('sabado');
      $do = $request->get('domingo');
      array_push($dias,$lu);
      array_push($dias,$ma);
      array_push($dias,$mi);
      array_push($dias,$ju);
      array_push($dias,$vi);
      array_push($dias,$sa);
      array_push($dias,$do);
      //dd($dias);

      $tot_m = 0;
      $tot_t = 0;

      for ($i=0; $i < 7; $i++) {
        if ($dias[$i] == 'Mañana') {
          $tot_m++;
        }
        elseif ($dias[$i] == 'Tarde') {
          $tot_t++;
        }
        elseif ($dias[$i] == 'Todo el día') {
          $tot_m++;
          $tot_t++;
        }
      }

      $seth = new Disponibilidad();
      $seth->id_expositor = $id;
      $seth->lunes = $lu;
      $seth->martes = $ma;
      $seth->miercoles = $mi;
      $seth->jueves = $ju;
      $seth->viernes = $vi;
      $seth->sabado = $sa;
      $seth->domingo = $do;
      $seth->total_m = $tot_m;
      $seth->total_t = $tot_t;
      //dd($seth);
      $seth->save();
      return redirect('/mi_horario');
      //dd($horario);


    }
    public function pagos()
    {
      if (Auth::user()->id_rol == 1){
        $expo = Exhibitor::all();
        //dd($expo);
        return view('pagos');
      }
    }

    public function getHistorial()
    {

      if (Auth::user()->id_rol == 4){
          $id = Auth::user()->id;
          $expo = Exhibitor::where('id_user','=',$id)->first();
          $detalle_turno = Turndetail::where('id_expositor','=',$expo->id)->get();
          $now = new \DateTime();
          $now->format('Y-m-d');

          $det = array();
          $turno = array();
          $jornada = array();
          $evento = array();
          $tipo = array();
          $esta = array();
          $fecha = array();
          $post = array();
          $pagar = 0;
          foreach ($detalle_turno as $dt) {
                array_push($det,$dt);
                array_push($post,$dt->id);
                $tur = Turn::where('id','=',$dt->id_turno)->get();
                foreach ($tur as $tr ) {
                  $jorn = Jornada::where('id','=',$tr->id_jornada)->get();
                  $pagar = $pagar + $jorn[0]['valor'];
                  array_push($jornada,$jorn);
                  $eve = Event::where('id','=',$tr->id_evento)->get();
                  foreach($eve as $e){
                    $tp = Eventtype::where('id','=',$e->id_tipo_evento)->get();
                    array_push($tipo,$tp);
                    $et = Establishment::where('id','=',$e->id_establecimiento)->get();
                    array_push($esta,$et);
                  }
                  $date = date_create($eve[0]['start']);
                  $fec = $date->diff($now);

                  array_push($fecha,$fec);
                  array_push($evento,$eve);
                }
                array_push($turno,$tur);
          }
          $max = count($evento);

          if (Auth::user()->id_rol == 4){
            $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
            $turns = Turndetail::where('id_expositor',$expo[0]->id)->get();
          //  dd($turns);
            $count = 0;
            foreach ($turns as $turno) {
                if ($turno->visto == 0) {
                  $count++;
                }
            }
          }

            return view('/datos.mi_historia',compact('det','jornada','tipo','evento','esta','pagar','max','fecha','post','count') );
          }
    }
    public function updateAsistir(Request $request)
    {
      if (Auth::user()->id_rol == 4){
        $idd = $request->getQueryString();
        $detail = Turndetail::find($idd);
        $detail ->confirmacion = $request->get('asistir');
        $detail->visto = 1;
        $detail->save();


        return back()->withInput();


      }
    }

    /*public function checkTurns()
    {
      //return view('/mi_historial');
      //dd(Auth::user());
        if (Auth::user()->id_rol  == 4) {
          $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
          $turn = Turndetail::where('id_expositor',$expo[0]->id);
          foreach ($turn as $t) {
            $t->visto = 1;
            $t->save();
        }

      }

    }*/

}
