<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establishment;
use App\Establishmenttype;
use App\Establishmentcharge;
use App\Departament;
use App\Region;
use App\Commune;
use Auth;
use Illuminate\Support\Facades\DB;

class EstablecimientosController extends Controller
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
      if(Auth::user()->id_rol != 4){
        $establecimientos = array();
        $est = Establishment::all()->toArray();
        foreach ($est as $estab) {
          $comuna = Commune::where('id',$estab['id_comuna'])->first();
          $nomcomuna = $comuna->nombre;
          $estab['id_comuna'] = $nomcomuna;

          $dep = Departament::where('id',$estab['id_depto'])->first();
          $nomdep = $dep->descripcion;
          $estab['id_depto'] = $nomdep;

          $tipo = Establishmenttype::where('id',$estab['id_tipo_establecimiento'])->first();
          $t = $tipo->tipo;
          $estab['id_tipo_establecimiento'] = $t;

          $cargo = Establishmentcharge::where('id',$estab['id_cargo'])->first();
          $car = $cargo->descripcion;
          $estab['id_cargo'] = $car;

          array_push($establecimientos,$estab);

        }
        return view('establecimientos.index',compact('establecimientos'));
      }
      else{
        return redirect('/');
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
        $tipos = Establishmenttype::all();
        $deptos = Departament::all();
        $comunas = Commune::orderBy('nombre','asc')->get();
        $regiones = Region::orderBy('nombre','asc')->get();
        $cargos = Establishmentcharge::orderBy('descripcion','asc')->get();
        return view('establecimientos.create',compact('tipos','deptos','comunas','regiones','cargos'));
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
      if(Auth::user()->id_rol != 4){
        $est = new Establishment([
          'rbd' => $request->get('rbd'),
          'nombre_establecimiento' => $request->get('nombre'),
          'id_comuna' => $request->get('comuna'),
          'direccion' => $request->get('direccion'),
          'id_depto' => $request->get('depto'),
          'id_tipo_establecimiento' => $request->get('tipo'),
          'encargado' => $request->get('encargado'),
          'id_cargo' => $request->get('cargo'),
          'correo' => $request->get('correo'),
          'telefono' => $request->get('fono'),
          'pace' => $request->get('pace'),
        ]);
        $est->save();

        return redirect('/establecimientos');
      }
      else{
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
        $estab = Establishment::find($id);
        $comunas = Commune::all();
        $com = Commune::where('id','=',$estab->id_comuna)->get();
        //dd($com[0]->nombre);

        $deptos = Departament::all();
        $dept = Departament::where('id','=',$estab->id_depto)->get();
        //dd($dept[0]->descripcion);

        $tipos = Establishmenttype::all();
        $tip = Establishmenttype::where('id','=',$estab->id_tipo_establecimiento)->get();
        //dd($tip[0]->tipo);

        $cargos = Establishmentcharge::all();
        $carg = Establishmentcharge::where('id','=',$estab->id_cargo)->get();
        //dd($cargo[0]->descripcion);

        return view('establecimientos.edit',compact('estab','comunas','deptos','tipos','cargos','com','dept','tip','carg','id'));
      }
      else{
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
      if(Auth::user()->id_rol != 4){
        $estab = Establishment::find($id);

        $estab->rbd = $request->get('rbd');
        $estab->nombre_establecimiento = $request->get('rbd');
        $estab->id_comuna = $request->get('comuna');
        $estab->direccion = $request->get('direccion');
        $estab->id_depto = $request->get('depto');
        $estab->id_tipo_establecimiento = $request->get('tipo');
        $estab->encargado = $request->get('encargado');
        $estab->id_cargo = $request->get('cargo');
        $estab->correo = $request->get('correo');
        $estab->telefono = $request->get('fono');
        $estab->pace = $request->get('pace');
        $estab->save();

        return redirect('/establecimientos');
      }
      else{
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
        //
    }




}
