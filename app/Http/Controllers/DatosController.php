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
use App\Mail\turno;
use Mail;



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
        $largo=strlen($expo->alu_rut);
        if($largo==9)
        {
            $mistring = $expo->alu_rut;
            $mistring= substr($mistring,0,1).".".substr($mistring,1,3).".".substr($mistring,4,7);
            $expo->alu_rut=$mistring;
        }
        if($largo == 10)
        {
          $mistring = $expo->alu_rut;
          $mistring= substr($mistring,0,2).".".substr($mistring,2,3).".".substr($mistring,5,7);
          $expo->alu_rut=$mistring;
        }
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
        $largo=strlen($staffs->rut);
        if($largo==9)
        {
            $mistring = $staffs->rut;
            $mistring= substr($mistring,0,1).".".substr($mistring,1,3).".".substr($mistring,4,7);
            $staffs->rut=$mistring;
        }
        if($largo == 10)
        {
          $mistring = $staffs->rut;
          $mistring= substr($mistring,0,2).".".substr($mistring,2,3).".".substr($mistring,5,7);
          $staffs->rut=$mistring;
        }
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
        $name = $request->input('area');
        $msg = $request->input('mensaje');
        Mail::to($name)->send($msg);

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
        DB::table('disponibilidads')->where('id_expositor',$id)->delete();
        $expo = Exhibitor::where('id_user',Auth::user()->id)->get();
        $turns = Turndetail::where('id_expositor',$expo[0]->id)->get();
      //  dd($turns);
        $count = 0;
        foreach ($turns as $turno) {
            if ($turno->visto == 0) {
              $count++;
            }
        }
        return view('datos.agregar_horario',compact('expositor','horario','id','count'));

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
        elseif ($dias[$i] == 'Todo el Día') {
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
        $expos = Exhibitor::all();
        $pago =array();
        $element = 0;
        $medio = array();
        $completo = array();
        $tarde = array();
        $total = array();
        $canmedio=array();
        $cancompleto=array();
        $cantarde=array();
        $fechadiacompleto=array();
        $fechamediodia=array();
        $fechatarde=array();
        $largo = strlen($expos[1]['alu_rut']);
        $hoy = date("Y");
        $fecha = "Todo el registro";




        foreach ($expos as $exp ) {
          if($largo == 9)
          {
            $mistring=$exp['alu_rut'];
            $mistring= substr($mistring,0,1).".".substr($mistring,1,3).".".substr($mistring,4,7);
            $exp['alu_rut']=$mistring;
          }

          else{
          $mistring=$exp['alu_rut'];
          $mistring= substr($mistring,0,2).".".substr($mistring,2,3).".".substr($mistring,5,7);
          $exp['alu_rut']=$mistring;

          }
        }
        foreach ($expos as $expo) {
            $cmd = 0;
            $md = 0;
            $cdc = 0;
            $dc = 0;
            $cd18=0;
            $d18 = 0;
            $tot = 0;
            $fecdc="";
            $fecmd="";
            $fecd18="";
            $turndetail = Turndetail::where('id_expositor','=',$expo['id'])->where('asistencia','=','1')->where('pagado','=','0')->get();
            foreach ($turndetail as $dt ) {
                $turn = Turn::where('id','=',$dt['id_turno'])->get();
                foreach ($turn as $tr) {
                  $jornada = Jornada::where('id','=',$tr['id_jornada'])->get();
                  $evento = Event::where('id','=',$tr['id_evento'])->first();
                  $date = date("m", strtotime($evento['start']));
                  $ano = date("Y");

                  if($ano == $hoy){
                  if($jornada[0]['tipo']==1){
                    $md = $md + $jornada[0]['valor'];
                    $cmd= $cmd +1;
                      $date = date("d/m/y", strtotime($evento['start']));
                    $fecmd = $fecmd .$date."-";
                  }
                  if($jornada[0]['tipo']==2){
                    $dc = $dc + $jornada[0]['valor'];
                    $cdc = $cdc +1 ;
                    $date = date("d/m/y", strtotime($evento['start']));
                    $fecdc = $fecdc .$date."-";
                  }
                  if($jornada[0]['tipo']==3){
                    $d18 = $d18 + $jornada[0]['valor'];
                    $cd18 = $cd18 + 1;
                    $date = date("d/m/y", strtotime($evento['start']));
                    $fecd18 = $fecd18 .$date."-";
                  }
                }
                }
                //}
            }
            if($cmd!=0 || $cd18 !=0 || $cdc !=0 ){
            $element = $element +1 ;
            $tot = $md + $dc + $d18;
            array_push($pago,$expo);
            array_push($medio,$md);
            array_push($completo,$dc);
            array_push($tarde,$d18);
            array_push($canmedio,$cmd);
            array_push($cancompleto,$cdc);
            array_push($cantarde,$cd18);
            array_push($fechamediodia,$fecmd);
            array_push($fechadiacompleto,$fecdc);
            array_push($fechatarde,$fecd18);
            array_push($total,$tot);

          }
        }
        return view('pagos',compact('pago','expos','element','medio','completo','tarde',
        'canmedio','cantarde','cancompleto','total','fechamediodia','fechadiacompleto','fechatarde','fecha'));
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
        if($detail->confirmacion == 2 )
        {
          $turno = Turn::where('id',$detail->id_turno)->first();
          $event = Event::where('id',$turno->id_evento)->first();
          $event->cupos = $event->cupos + 1;
          $event->save();
        }
        $detail->visto = 1;
        $detail->save();


        return back()->withInput();


      }
    }


    public function pagoss(Request $request){

      if (Auth::user()->id_rol == 1){
        $fecha =  $request->meses;
        $mes = date("m", strtotime($fecha));
        $ano = date("Y", strtotime($fecha));


        $expos = Exhibitor::all();
        $pago =array();
        $element = 0;
        $medio = array();
        $completo = array();
        $tarde = array();
        $total = array();
        $canmedio=array();
        $cancompleto=array();
        $cantarde=array();
        $fechadiacompleto=array();
        $fechamediodia=array();
        $fechatarde=array();


        $fecha = strftime("%B del %Y", strtotime($request->meses));

        $largo = strlen($expos[1]['alu_rut']);

        foreach ($expos as $exp ) {
          if($largo == 9)
          {
            $mistring=$exp['alu_rut'];
            $mistring= substr($mistring,0,1).".".substr($mistring,1,3).".".substr($mistring,4,7);
            $exp['alu_rut']=$mistring;
          }
          else{
          $mistring=$exp['alu_rut'];
          $mistring= substr($mistring,0,2).".".substr($mistring,2,3).".".substr($mistring,5,7);
          $exp['alu_rut']=$mistring;

          }
        }

        foreach ($expos as $expo) {
            $cmd = 0;
            $md = 0;
            $cdc = 0;
            $dc = 0;
            $cd18=0;
            $d18 = 0;
            $tot = 0;
            $fecdc="";
            $fecmd="";
            $fecd18="";
            $turndetail = Turndetail::where('id_expositor','=',$expo['id'])->where('asistencia','=','1')->where('pagado','=','0')->get();



            foreach ($turndetail as $dt ) {
                $turn = Turn::where('id','=',$dt['id_turno'])->get();
                foreach ($turn as $tr) {
                  $jornada = Jornada::where('id','=',$tr['id_jornada'])->get();
                  $evento = Event::where('id','=',$tr['id_evento'])->first();
                  $date = date("m", strtotime($evento['start']));
                  $datean = date("Y", strtotime($evento['start']));

                  if($date == $mes && $datean == $ano ){
                  if($jornada[0]['tipo']==1){
                    $md = $md + $jornada[0]['valor'];
                    $cmd= $cmd +1;
                      $date = date("d", strtotime($evento['start']));
                    $fecmd = $fecmd .$date."-";
                  }
                  if($jornada[0]['tipo']==2){
                    $dc = $dc + $jornada[0]['valor'];
                    $cdc = $cdc +1 ;
                    $date = date("d", strtotime($evento['start']));
                    $fecdc = $fecdc .$date."-";
                  }
                  if($jornada[0]['tipo']==3){
                    $d18 = $d18 + $jornada[0]['valor'];
                    $cd18 = $cd18 + 1;
                    $date = date("d", strtotime($evento['start']));
                    $fecd18 = $fecd18.$date."-";

                  }
                }

                }
            }
            if($cmd!=0 || $cd18 !=0 || $cdc !=0 ){
            $element = $element +1 ;
            $tot = $md + $dc + $d18;
            array_push($pago,$expo);
            array_push($medio,$md);
            array_push($completo,$dc);
            array_push($tarde,$d18);
            array_push($canmedio,$cmd);
            array_push($cancompleto,$cdc);
            array_push($cantarde,$cd18);
            array_push($fechamediodia,$fecmd);
            array_push($fechadiacompleto,$fecdc);
            array_push($fechatarde,$fecd18);
            array_push($total,$tot);

          }
        }
        return view('pagos',compact('pago','expos','element','medio','completo','tarde',
        'canmedio','cantarde','cancompleto','total','fechamediodia','fechadiacompleto','fechatarde','fecha'));
      }
    }

    public function getJornadas(){
      if(Auth::user()->id_rol == 1){
        $jornadas = Jornada::all();
        return view('datos.jornadas',compact('jornadas'));
      }else{
        return redirect('/');
      }
    }

    public function setJornadas(Request $request){
      if(Auth::user()->id_rol == 1){
        $LU1 = Jornada::find(1);
        $LU1->valor = $request->get('lu1');
        $LU1->save();

        $LU2 = Jornada::find(2);
        $LU2->valor = $request->get('lu2');
        $LU2->save();

        $LU3 = Jornada::find(3);
        $LU3->valor = $request->get('lu3');
        $LU3->save();

        $SA1 = Jornada::find(4);
        $SA1->valor = $request->get('sa1');
        $SA1->save();

        $SA2 = Jornada::find(5);
        $SA2->valor = $request->get('sa2');
        $SA2->save();

        $DO1 = Jornada::find(6);
        $DO1->valor = $request->get('do1');
        $DO1->save();

        $DO2 = Jornada::find(7);
        $DO2->valor = $request->get('do2');
        $DO2->save();

        $jornadas = Jornada::all();
        return view('datos.jornadas',compact('jornadas'));
      }else{
        return redirect('/');
      }
    }
    public function con()
    {
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
        return view('contact',compact('count'));
      }
      else {
        return redirect('/');
      }
      # code...
    }

}
