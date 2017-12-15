@extends('layouts.master')

@section('title','Eventos')
@section('ventana','Listado de Eventos')
@section('contenido')


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
  <h1>Listado de Eventos</h1>
</div>


<div style="overflow-x:auto;">
<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
          <tr>
            <th class="text-center">Fecha</th>
              <th class="text-center">Evento</th>
              <th class="text-center">Hora de Inicio</th>
              <th class="text-center">Establecimiento</th>
              <th class="text-center">Dirección</th>
              <th class="text-center">Cupos disponibles</th>
              <th class="text-center">Fecha de creación</th>
              <th class="text-right">Acciones</th>
              <th></th>
              <th></th>
          </tr>
      </thead>
      <tfoot>
          <tr>
            <th class="text-center">Fecha</th>
            <th class="text-center">Evento</th>
            <th class="text-center">Hora de Inicio</th>
            <th class="text-center">Establecimiento</th>
            <th class="text-center">Dirección</th>
            <th class="text-center">Cupos disponibles</th>
            <th class="text-center">Fecha de creación</th>
            <th class="text-right">Acciones</th>
            <th></th>
            <th></th>
        </tr>

      </tfoot>
      <tbody>
        @foreach ($eventos as $post)
        @if($hoy < $post['start'])
        <tr>
          <td class="text-center">{{\Carbon\Carbon::parse($post['start'])->format('d/m/Y')}}</td>
          <td class="text-center">{{$post['title']}}</td>
          <td class="text-center">{{\Carbon\Carbon::parse($post['start'])->format('H:m')}}</td>
          @foreach($establecimientos as $est)
            @if($est['id'] == $post['id_establecimiento'])
            <td class="text-center">{{$est['rbd']}} / {{$est['nombre_establecimiento']}}</td>
            @endif
          @endforeach
          <td class="text-center">{{$post['direccion']}}</td>
          <td class="text-center">{{$post['cupos']}}</td>
          <td class="text-center">{{\Carbon\Carbon::parse($post['created_at'])->format('d/m/Y H:m')}}</td>
          @if($post['cupos'] > 0)
          <td class="text-center"><a href="{{action('EventosController@asignarHorario',$post['id'])}}" class="btn btn-warning"><strong>Asignar Turnos</strong></a></td>
          @else
          <td class="text-center" ><b><font color="green"> Ya fueron asignados todos los cupos disponibles </font></b></td>
          @endif
          <td class="text-center"><a href="{{action('EventosController@edit',$post['id'])}}" class="btn btn-success"><strong>Editar Evento</strong></a></td>
          <td class="text-center"><form action="{{action('EventosController@destroy',$post['id'])}}" method="post" >
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
             <button class="btn btn-danger" type="submit"> <strong>Cancelar Evento</strong> </button>
            </form>
          </td>
        </tr>
        @endif
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
