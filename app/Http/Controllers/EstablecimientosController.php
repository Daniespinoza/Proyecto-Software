<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establishment;
use App\Establishmenttype;
use App\Establishmentcharge;
use App\Departament;
use App\Region;
use App\Commune;


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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Establishmenttype::all();
        $deptos = Departament::all();
        $comunas = Commune::orderBy('nombre','asc')->get();
        $regiones = Region::orderBy('nombre','asc')->get();
        $cargos = Establishmentcharge::orderBy('descripcion','asc')->get();
        return view('establecimientos.create',compact('tipos','deptos','comunas','regiones','cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
}
