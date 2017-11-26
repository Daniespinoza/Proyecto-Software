<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exhibitor;
use App\User;
use App\Commune;
use App\Carrera;
use App\Region;
use Illuminate\Support\Facades\DB;


class ExpositoresController extends Controller
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
        $expositores = array();
        $exposit = Exhibitor::all()->toArray();
        foreach ($exposit as $expo) {
          $carrera = Carrera::where('id',$expo['id_carrera'])->first();
          $nomcarrera = $carrera->nombre;
          $expo['id_carrera'] = $nomcarrera;

          $comuna = Commune::where('id',$expo['id_comuna'])->first();
          $nomcomuna = $comuna->nombre;
          $expo['id_comuna'] = $nomcomuna;
          array_push($expositores,$expo);
        }
        //dd($expositores);

        return view('expositores.index', compact('expositores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $commun= Commune::all();
        $carreras = Carrera::orderBy('nombre','asc')->get();
        return view('expositores.create',compact('regions','commun','carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pass = substr($request->get('mail'), 0,-8);
        $users = new User([
            'name'=> $request->get('nombre') ,
            'email'=> $request->get('mail'),
            'password'=> bcrypt($pass),
            'id_rol'=> 4,
            'activo'=>true

        ]);

        $users -> save();
        $run =substr($request->get('rut'), 0,8);
        $sema = $request->get('sem') - 1;
        $expo = new Exhibitor([

          'alu_nombre'=> $request->get('nombre'),
          'alu_apellido_paterno'=> $request->get('ap_pat'),
          'alu_apellido_materno'=> $request->get('ap_mat'),
          'alu_rut'=> $request->get('rut'),
          'run'=> $run,
          'genero'=> $request->get('genero'),
          'alu_celular'=> $request->get('telefono'),
          'alu_email'=> $request->get('mail'),
          'semestres_aprobados'=> $sema,
          'semestre_actual'=> $request->get('sem'),
          'direccion'=> $request->get('direccion'),
          'id_comuna'=> $request->get('comuna'),
          'activo'=> true,
          'id_user'=> $users->id,
          'id_carrera'=> $request->get('carrera')

        ]);
        $expo->save();

        return redirect('/expositores');

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
      $expo = Exhibitor::find($id);
      $c = $expo->id_comuna;
      $comm= Commune::where('id','=',$c)->get();
      $r =$comm[0]['id_region'] ;
      $regi = Region::where('id','=',$r)->get();
      $car=$expo->id_carrera;
      $carres = Carrera::where('id','=',$car)->get();
      $sex=$expo->genero;

      $commun = Commune::all();
      $regions = Region::all();
      $carreras = Carrera::all();



      return view('expositores.edit', compact('expo','sex','id','comm','regi','carres','regions','commun','carreras'));
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
        $sema = $request->get('sem') - 1;

        $expo = Exhibitor::find($id)->get();
        $expo->alu_rut = $request->get('rut');
        $expo->alu_nombre = $request->get('nombre');
        $expo->alu_apellido_paterno= $request->get('ap_pat') ;
        $expo->alu_apellido_materno = $request->get('ap_mat');
        $expo->alu_email = $request->get('mail');
        $expo->alu_celular = $request->get('telefono');
        $expo->direccion = $request->get('direccion');
        $expo->id_carrera = $request->get('carrera');
        $expo->id_comuna = $request->get('comuna');
        $expo->genero = $request->get('genero');
        $expo->semestre_actual = $request->get('sem');
        $expo->semestres_aprobados = $sema;
        $expo->activo = true;
        dd($expo);
        $expo->save();


        return redirect('/expositores');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $expo = Exhibitor::find($id);
      $expo->activo =0;
      $expo->save();
      $id1 =$expo->id_user;
      $user = User::where('id','=',$id1)->first();
      $user->activo=0;
      $user -> save();


      return redirect('/expositores');



    }
}
