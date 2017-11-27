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
        $nombre = $expo->alu_nombre." ".$expo->alu_apellido_paterno." ".$expo->alu_apellido_paterno;
        $correo=$expo->alu_email;
        $rut = $expo->alu_rut;
        $array = array('nombre' => $nombre,'correo' =>$correo,'rut'=>$rut);


        $carrera = Carrera::where('id',$expo['id_carrera'])->first();
        $comuna = Commune::where('id',$expo['id_comuna'])->first();
        $region = Region::where('id',$comuna['id_region'])->first();
        return  view('datos.mis_datos',compact('expo','array','carrera','comuna','region'));

      }
      else {
        $staffs = Staff::where('id_user','=',$user)->first();
        $nombre = $staffs->nombre." ".$staffs->apellido_paterno." ".$staffs->apellido_materno;
        $correo = $staffs->correo;
        $rut = $staffs->rut;
        $array = array('nombre' => $nombre,'correo' =>$correo,'rut'=>$rut);
        $comuna = Commune::where('id',$staffs['id_comuna'])->first();
        $region = Region::where('id',$comuna['id_region'])->first();
        return  view('datos.mis_datos',compact('array','comuna','region'));

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


    public function getHorario()
    {
      $user = Auth::user()->id;
      $expositor = Exhibitor::where('id_user',$user)->get();
      //dd($expositor[0]['id']);
      $id = $expositor[0]['id'];
      //dd($id);
      //$hor = Disponibilidad::all();
      //dd($hor);
      $horario = Disponibilidad::where('id_expositor',$id)->get();
      //dd($horario);

    
        return view('datos.mi_horario',compact('expositor','horario','id'));

    }
    public function setHorario()
    {

      $user = Auth::user()->id;
      $expositor = Exhibitor::where('id_user',$user)->get();
      $id = $expositor[0]['id'];
      $horario = Disponibilidad::where('id_expositor',$id)->get();
      //dd($horario);
      return view('datos.agregar_horario',compact('expositor','horario','id'));
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









}
