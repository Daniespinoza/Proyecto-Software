@extends('layouts.master')

@section('title','Personal')
@section('ventana','Ver Personal')
@section('contenido')
<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>RUT</th>
        <th>Rol</th>
        <th>Correo</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach($personal as $post)
      <tr>

        @if($post['activo'] == true)

        <td>{{$post['nombre']}}</td>
        <td>{{$post['apellido_paterno']}}</td>
        <td>{{$post['apellido_materno']}}</td>
        <td>{{$post['rut']}}</td>
        <td>{{$post['id_rol']}}</td>
        <td>{{$post['correo']}}</td>
        <td><a href="{{action('PersonalController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td><form action="{{action('PersonalController@destroy', $post['id'])}}" method="post">
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
