@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Ver Expositores')
@section('contenido')
<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Género</th>
        <th>RUT</th>
        <th>Carrera</th>
        <th>Correo</th>
        <th>Celular</th>
        <th>Dirección</th>
        <th>Comuna</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach($expositores as $post)
      <tr>
        @if($post['activo'] == true)
        <td>{{$post['alu_nombre']}}</td>
        <td>{{$post['alu_apellido_paterno']}}</td>
        <td>{{$post['alu_apellido_materno']}}</td>
        <td>{{$post['genero']}}</td>
        <td>{{$post['alu_rut']}}</td>
        <td>{{$post['id_carrera']}}</td>
        <td>{{$post['alu_email']}}</td>
        <td>{{$post['alu_celular']}}</td>
        <td>{{$post['direccion']}}</td>
        <td>{{$post['id_comuna']}}</td>
        <td><a href="{{action('ExpositoresController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        <td><form action="{{action('ExpositoresController@destroy', $post['id'])}}" method="post">
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
