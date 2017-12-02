@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Ver Expositores')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
  <h1>Expositores Inscritos</h1>
</div>


<div class="table-responsive">

<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th class="text-center" >Nombre</th>
              <th class="text-center" >Apellido Paterno</th>
              <th class="text-center" >Apellido Materno</th>
              <th class="text-center" >Género</th>
              <th class="text-center" >RUT</th>
              <th class="text-center" >Carrera</th>
              <th class="text-center" >Facultad</th>
              <th class="text-center" >Correo</th>
              <th class="text-center" >Celular</th>
              <th class="text-center" >Dirección</th>
              <th class="text-center" >Comuna</th>
              <th class="text-center">Fecha de ingreso</th>
              @if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
              <th class="text-right">Acciones</th>
              <th></th>
              @endif
          </tr>
      </thead>
      <tfoot>
          <tr>
            <th class="text-center" >Nombre</th>
            <th class="text-center" >Apellido Paterno</th>
            <th class="text-center" >Apellido Materno</th>
            <th class="text-center" >Género</th>
            <th class="text-center" >RUT</th>
            <th class="text-center" >Carrera</th>
            <th class="text-center" >Facultad</th>
            <th class="text-center" >Correo</th>
            <th class="text-center" >Celular</th>
            <th class="text-center" >Dirección</th>
            <th class="text-center" >Comuna</th>
            <th class="text-center">Fecha de ingreso</th>
            @if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
            <th class="text-right">Acciones</th>
            <th></th>
            @endif
        </tr>
          </tr>
      </tfoot>
      <tbody>
        @foreach($expositores as $post)
          <tr>
            @if($post['activo'] == true)
            <td class="text-center" >{{$post['alu_nombre']}}</td>
            <td class="text-center" >{{$post['alu_apellido_paterno']}}</td>
            <td class="text-center" >{{$post['alu_apellido_materno']}}</td>
            <td class="text-center" >{{$post['genero']}}</td>
            <td class="text-center" >{{$post['alu_rut']}}</td>
            <td class="text-center" >{{$post['id_carrera']}}</td>
            @foreach($carreras as $car)
              @if($car['nombre'] == $post['id_carrera'])
                @foreach($facultades as $fac)
                  @if($fac['id'] == $car['id_facultad'])
                    <td class="text-center" >{{$fac['nombre']}}</td>
                  @endif
                @endforeach
              @endif
            @endforeach
            <td class="text-center" >{{$post['alu_email']}}</td>
            <td class="text-center" >{{$post['alu_celular']}}</td>
            <td class="text-center" >{{$post['direccion']}}</td>
            <td class="text-center" >{{$post['id_comuna']}}</td>
            <td class="text-center" >{{$post['created_at']}}</td>
            @if(Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
            <td class="text-center" ><a href="{{action('ExpositoresController@edit', $post['id'])}}" class="btn btn-success"><strong>Editar</strong></a></td>
            <td class="text-center" ><form action="{{action('ExpositoresController@destroy', $post['id'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit"><strong>Eliminar</strong></button>
                </form>
            </td>
            @endif
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
