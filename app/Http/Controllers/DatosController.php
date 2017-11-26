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
      $horario = Disponibilidad::where('id_expositor',$expositor[0]['id'])->get();
      //dd($horario);
      return view('datos.mi_horario',compact('expositor','horario','id'));
    }
    public function setHorario()
    {

    }









}
