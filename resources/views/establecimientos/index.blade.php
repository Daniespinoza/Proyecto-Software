@extends('layouts.master')

@section('title','Establecimientos')
@section('ventana','Ver Establecimientos')
@section('contenido')
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" >RBD</th>
        <th class="text-center" >Nombre</th>
        <th class="text-center" >Dirección</th>
        <th class="text-center" >Comuna</th>
        <th class="text-center" >Dep.</th>
        <th class="text-center" >Tipo</th>
        <th class="text-center" >Encargado</th>
        <th class="text-center" >Cargo</th>
        <th class="text-center" >Correo</th>
        <th class="text-center" >Teléfono</th>
        <th class="text-center" >PACE</th>
        @if(Auth::user()->id_rol == 1)
        <th  class="text-center" colspan="1">Acción</th>
        @endif
      </tr>
    </thead>
    <tbody>

      @foreach($establecimientos as $post)
      <tr>
        <td class="text-center" >{{$post['rbd']}}</td>
        <td class="text-center" >{{$post['nombre_establecimiento']}}</td>
        <td class="text-center" >{{$post['direccion']}}</td>
        <td class="text-center" >{{$post['id_comuna']}}</td>
        <td class="text-center" >{{$post['id_depto']}}</td>
        <td class="text-center" >{{$post['id_tipo_establecimiento']}}</td>
        <td class="text-center" >{{$post['encargado']}}</td>
        <td class="text-center" >{{$post['id_cargo']}}</td>
        <td class="text-center" >{{$post['correo']}}</td>
        <td class="text-center" >{{$post['telefono']}}</td>
        <td class="text-center" >{{$post['pace']}}</td>
        @if(Auth::user()->id_rol == 1)
        <td class="text-center" ><a href="{{action('EstablecimientosController@edit', $post['id'])}}" class="btn btn-warning">Editar</a></td>

        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
