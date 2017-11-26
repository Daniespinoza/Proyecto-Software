<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Role;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
      if(Auth::user()->id_rol == 1){
        $personal = array();
        $perso = Staff::all()->toArray();
        foreach ($perso as $per) {
          if ($per['correo'] != Auth::user()->email) { //no mostrar a si mismo
            $role = Role::where('id',$per['id_rol'])->first();
            $rol = $role->permiso;
            $per['id_rol'] = $rol;
            array_push($personal,$per);
          }
        }
        return view('personal.index', compact('personal'));
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
      if(Auth::user()->id_rol == 1){
        $roles = Role::where('id','!=',4)->get();
        return view('personal.create',compact('roles'));
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
      if(Auth::user()->id_rol == 1){

        $pass = substr($request->get('correo'),0,-8);
        $ac = true;
        $user = new User([
          'name' => $request->get('nombre'),
          'email' => $request->get('correo'),
          'password' => bcrypt($pass),
          'id_rol' => $request->get('rol'),
          'activo' => $ac
        ]);

        $user->save();

        $staff = new Staff([
          'nombre' => $request->get('nombre'),
          'apellido_paterno' => $request->get('ap_pat'),
          'apellido_materno' => $request->get('ap_mat'),
          'rut' => $request->get('rut'),
          'run' => $request->get('run'),
          'id_rol' => $request->get('rol'),
          'correo' => $request->get('correo'),
          'activo' => true,
          'id_user' => $user->id
        ]);

        $staff->save();

        return redirect('/personal');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if(Auth::user()->id_rol == 1){
        $personal = Staff::find($id);
        $roles = Role::where('id','!=',4)->get();
        $r = $personal->id_rol;
        $roll = Role::where('id','=',$r)->get();
        return view('personal.edit', compact('personal','roles','roll','id'));
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
      if(Auth::user()->id_rol == 1){
        $personal = Staff::find($id);
        $user = User::find($personal->id_user);
        $pw = substr($request->get('correo'),0,-8);

        $user->name = $request->get('nombre');
        $user->email = $request->get('correo');
        $user->password = bcrypt($pw);
        $user->id_rol = $request->get('rol');
        $user->activo = true;
        //dd($user);
        $user->save();

        $personal->nombre = $request->get('nombre');
        $personal->apellido_paterno = $request->get('ap_pat');
        $personal->apellido_materno = $request->get('ap_mat');
        $personal->rut = $request->get('rut');
        $personal->run = $request->get('run');
        $personal->id_rol = $request->get('rol');
        $personal->correo = $request->get('correo');
        $personal->activo = true;
        $personal->id_user = $personal->id_user;
        $personal->save();


        return redirect('/personal');
      }
      else{
        return redirect('/');
      }
    }
//
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if(Auth::user()->id_rol == 1){
        $personal = Staff::find($id);
        $mod = Staff::where('id',$id)->first();
        $user = User::find($personal->id_user);


        $user->name = $user->name;
        $user->email = $user->email;
        $user->password = $user->password;
        $user->id_rol = $user->id_rol;
        $user->activo = false;
        $user->save();

        $personal->nombre = $mod->nombre;
        $personal->apellido_paterno = $mod->apellido_paterno;
        $personal->apellido_materno = $mod->apellido_materno;
        $personal->rut = $mod->rut;
        $personal->run = $mod->run;
        $personal->id_rol = $mod->id_rol;
        $personal->correo = $mod->correo;
        $personal->activo = false;
        $personal->id_user = $mod->id_user;

        $personal->save();

        return redirect('/personal');
      }
      else{
        return redirect('/');
      }
    }
}
