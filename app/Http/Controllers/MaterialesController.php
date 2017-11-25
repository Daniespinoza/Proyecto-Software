<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialesController extends Controller
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
        $materiales = Material::all()->toArray();

        return view('materiales.index',compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $material = new Material([
            'descripcion' => $request->get('nombre'),
            'stock_total' => $request->get('cantidad'),
            'activo' => true

          ]);

          $users = Material::where('descripcion',$material['descripcion'])->first();


          if($users==null){
            $material->save();
          }
          else
          {
            $sum=$request->get('cantidad') + $users->stock_total;
            $users['stock_total']=$sum;
            $users['activo']=true;
            $users->save();




          }


          return redirect('/materiales');
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
          $materiales = Material::find($id);

          return view('materiales.edit', compact('materiales','id'));
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
        $materiales = Material::find($id);
        $materiales->descripcion = $request->get('nombre');
        $materiales->stock_total = $request->get('cantidad');
        $materiales->activo = true;
        $materiales->save();

        return redirect('/materiales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $materiales = Material::find($id);

        $mod = Material::where('id',$id)->first();

        $materiales->descripcion = $mod->descripcion;
        $materiales->stock_total = $mod->stock_total;
        $materiales->activo = false;

        $materiales->save();

        return redirect('/materiales');
    }
}
