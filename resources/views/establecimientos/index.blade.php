@extends('layouts.master')

@section('title','Establecimientos')
@section('ventana','Ver Establecimientos')
@section('contenido')
<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>RBD</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Comuna</th>
        <th>Dep.</th>
        <th>Tipo</th>
        <th>Encargado</th>
        <th>Cargo</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>PACE</th>
        @if(Auth::user()->id_rol == 1)
        <th colspan="1">Acción</th>
        @endif
      </tr>
    </thead>
    <tbody>

      @foreach($establecimientos as $post)
      <tr>
        <td>{{$post['rbd']}}</td>
        <td>{{$post['nombre_establecimiento']}}</td>
        <td>{{$post['direccion']}}</td>
        <td>{{$post['id_comuna']}}</td>
        <td>{{$post['id_depto']}}</td>
        <td>{{$post['id_tipo_establecimiento']}}</td>
        <td>{{$post['encargado']}}</td>
        <td>{{$post['id_cargo']}}</td>
        <td>{{$post['correo']}}</td>
        <td>{{$post['telefono']}}</td>
        <td>{{$post['pace']}}</td>
        @if(Auth::user()->id_rol == 1)
        <td><a href="{{action('EstablecimientosController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>
        
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
