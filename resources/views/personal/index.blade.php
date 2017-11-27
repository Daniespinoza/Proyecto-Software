@extends('layouts.master')

@section('title','Personal')
@section('ventana','Ver Personal')
@section('contenido')
<div class="page-header">
  <h1>Personal Inscrito</h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Nombres</th>
        <th class="text-center">Apellido Paterno</th>
        <th class="text-center">Apellido Materno</th>
        <th class="text-center">RUT</th>
        <th class="text-center">Rol</th>
        <th class="text-center">Correo</th>
        <th class="text-center" colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($personal as $post)
      <tr>

        @if($post['activo'] == true)

        <td class="text-center">{{$post['nombre']}}</td>
        <td class="text-center">{{$post['apellido_paterno']}}</td>
        <td class="text-center">{{$post['apellido_materno']}}</td>
        <td class="text-center">{{$post['rut']}}</td>
        <td class="text-center">{{$post['id_rol']}}</td>
        <td class="text-center">{{$post['correo']}}</td>
        <td class="text-center"><a href="{{action('PersonalController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td class="text-center"><form action="{{action('PersonalController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@endsection
