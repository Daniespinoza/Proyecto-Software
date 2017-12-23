@extends('layouts.master')


@section('title','Ficha Asistencia')
@section('ventana','Ficha de asistencia y registro a Eventos')
@section('contenido')

<div class="page-header">
  <h1>Ficha de Asistencia y Registro a Eventos: &nbsp;&nbsp; <strong> {{$event['title']}}</strong></h1>

</div>
<div style="overflow-x:auto;">
<div class="page-content">
  <div class="row">
    <div class="col-md-4" ><h4 align="right"><strong>Fecha:</strong> {{\Carbon\Carbon::parse($event['start'])->format('d/m/Y')}}</h4></div>

    <div class="col-md-3"><h4 align="center"><strong>Horario:</strong> {{\Carbon\Carbon::parse($event['start'])->format('H:m')}}</h4></div>

    <div class="col-md-3"><h4 align="left"><strong>Lugar:</strong> {{$event['direccion']}}</h4></div>
  </div>
<div class="row">

  <div class=""><h4 align="center"><strong>Tipo Evento:</strong> {{$eventype['subtipo']}}</h4></div>
</div>


<table id="examples" class="display table table-hover" cellspacing="0" width="100%">
  <thead>
    <tr>

    <th class="text-center"></th>
    <th class="text-center"colspan="3"><center>Uniforme</center></th>
    <th class="text-center"></th>

  </tr>
  <tr>
    <th class="text-center">Nombre</th>
    <th class="text-center">Polera</th>
    <th class="text-center">Poleron</th>
    <th class="text-center">Chaqueta</th>
    <th class="text-center">Firma</th>
  </tr>
  </thead>
  <tbody>
    @for($j=0;$j<$canexp;$j++)
    <tr>
    <td class="text-center">{{ $expos[$j]['alu_nombre']." ".$expos[$j]['alu_apellido_paterno']." ".$expos[$j]['alu_apellido_materno'] }}</td>
    <td class="text-center">
      @if($turnodetail[$j]['polera']==1)
        <i class="fa fa-check" aria-hidden="true"></i>
        @else
          <i class="fa fa-times" aria-hidden="true"></i>
      @endif

    </td>
    <td class="text-center">
      @if($turnodetail[$j]['poleron']==1)
        <i class="fa fa-check" aria-hidden="true"></i>
        @else
          <i class="fa fa-times" aria-hidden="true"></i>
      @endif
    </td>

    <td class="text-center">
      @if($turnodetail[$j]['chaqueta']==1)
        <i class="fa fa-check" aria-hidden="true"></i>
        @else
          <i class="fa fa-times" aria-hidden="true"></i>
      @endif
    </td>

    <td class="text-center">
      @if($turnodetail[$j]['asistencia']==1)
        <i class="fa fa-check" aria-hidden="true"></i>
        @else
          <i class="fa fa-times" aria-hidden="true"></i>
      @endif
    </td>

  </tr>
  @endfor
  </tbody>
</table>
<table id="example" class="display table table-hover" cellspacing="0" width="100%">

  <thead>
    <th class="text-center">Descripción</th>
    <th class="text-center">Cantidad utilizada</th>
  </thead>
  <tfoot>
    <th class="text-center">Descripción</th>
    <th class="text-center">Cantidad utilizada</th>
  </tfoot>
  <tbody>
    @for($i = 0 ; $i < $canma ; $i++)
    <tr>
    <td class="text-center">{{$materias[$i]}}</td>
    <td class="text-center">{{$stock[$i]['cantidad']}}</td>
  </tr>
    @endfor
  </tbody>
</table>
<div class="page-content">
  <div class="row">
    <div class="col-md-4" ><h4 align="right"><strong>Transporte:</strong> {{ $turno[0]['tipo_transporte'] }}</h4></div>
    <div class="col-md-4" ><h4 align="center"><strong>Encargado:</strong> {{$encar[0]->alu_nombre." ".$encar[0]->alu_apellido_paterno." ".$encar[0]->alu_apellido_materno }}</h4></div>
    <div class="col-md-3" ><h4 align="right"><strong>Monto:</strong> $ {{$encar[1]}}</h4></div>
</div>


</div>
</div>

<script>
$(document).ready(function() {
  $('#example').DataTable( {
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      },
      responsive: true,
      "scrollX": true,
      dom: 'Bfrtip',
      buttons: [
           {
               extend: 'pdfHtml5',
               orientation: 'landscape',
               pageSize:'LEGAL',
           }
       ],
      paging: false,
      ordering: true,
      searching: false

  } );
} );
</script>
@endsection
