@extends('layouts.master')

@section('title','Eventos')
@section('ventana','Historial de Eventos')
@section('contenido')


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
  <h1>Historial de Eventos</h1>
</div>


<div style="overflow-x:auto;">
<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th class="text-center">Evento</th>
              <th class="text-center">Fecha y Hora</th>
              <th class="text-center">Establecimiento</th>
              <th class="text-center">Dirección</th>
              <th class="text-center">Cupos</th>

          </tr>
      </thead>
      <tfoot>
          <tr>
            <th class="text-center">Evento</th>
            <th class="text-center">Fecha y Hora</th>
            <th class="text-center">Establecimiento</th>
            <th class="text-center">Dirección</th>
            <th class="text-center">Cupos</th>
        </tr>

      </tfoot>
      <tbody>
        @foreach ($eventos as $post)
        @if($hoy < $post['start'])
        <tr>
          <td class="text-center">{{$post['title']}}</td>
          <td class="text-center">{{\Carbon\Carbon::parse($post['start'])->format('d/m/Y H:m')}}</td>
          @foreach($establecimientos as $est)
            @if($est['id'] == $post['id_establecimiento'])
            <td class="text-center">{{$est['nombre_establecimiento']}}</td>
            @endif
          @endforeach
          <td class="text-center">{{$post['direccion']}}</td>
          <td class="text-center">{{$post['cupos']}}</td>
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
