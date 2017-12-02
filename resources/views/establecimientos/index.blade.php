@extends('layouts.master')

@section('title','Establecimientos')
@section('ventana','Ver Establecimientos')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
  <h1>Establecimientos Inscritos</h1>
</div>


<div class="table-responsive">

<table id="example" class="display" cellspacing="0" width="100%">
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
              <th class="text-center">Fecha de ingreso</th>
              @if(Auth::user()->id_rol != 4)
              <th class="text-right">Acción</th>
              @endif
          </tr>
      </thead>
      <tfoot>
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
            <th class="text-center">Fecha de ingreso</th>
            @if(Auth::user()->id_rol != 4)
            <th class="text-right">Acción</th>
            @endif
        </tr>
          </tr>
      </tfoot>
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
            <td class="text-center" >{{$post['created_at']}}</td>
            @if(Auth::user()->id_rol != 4)
            <td class="text-center" ><a href="{{action('EstablecimientosController@edit', $post['id'])}}" class="btn btn-success"><strong>Editar</strong></a></td>
            @endif
          </tr>
        @endforeach
      </tbody>
  </table>
</div>






<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
  $('#example').DataTable( {
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      }
  } );
} );
</script>

@endsection
