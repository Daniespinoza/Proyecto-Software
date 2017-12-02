@extends('layouts.master')

@section('title','Personal')
@section('ventana','Ver Personal')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
    <h1>Personal Inscrito</h1>
</div>


<div class="table-responsive">

<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th class="text-center">Nombres</th>
              <th class="text-center">Apellido Paterno</th>
              <th class="text-center">Apellido Materno</th>
              <th class="text-center">RUT</th>
              <th class="text-center">Rol</th>
              <th class="text-center">Correo</th>
              <th class="text-center">Fecha de ingreso</th>

              <th class="text-right">Acciones</th>
              <th></th>
          </tr>
      </thead>
      <tfoot>
          <tr>
            <th class="text-center">Nombres</th>
            <th class="text-center">Apellido Paterno</th>
            <th class="text-center">Apellido Materno</th>
            <th class="text-center">RUT</th>
            <th class="text-center">Rol</th>
            <th class="text-center">Correo</th>
            <th class="text-center">Fecha de ingreso</th>

            <th class="text-right">Acciones</th>
            <th></th>
        </tr>
          </tr>
      </tfoot>
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
              <td class="text-center">{{$post['created_at']}}</td>
              <td class="text-center"><a href="{{action('PersonalController@edit', $post['id'])}}" class="btn btn-success"><strong>Editar</strong></a></td>
              <td class="text-center"><form action="{{action('PersonalController@destroy', $post['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit"><strong>Eliminar</strong></button>
                  </form>
              </td>
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
