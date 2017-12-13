@extends('layouts.master')

@section('title','Nómina de pagos Estudiantes Expositores de Difusión UTEM')
@section('ventana','Generar Pagos')
@section('contenido')

<!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">-->


<div class="page-header">
  <h1>Nómina de pagos Estudiantes Expositores de Difusión UTEM</h1>
</div>

<div class="form-group">
<form class="form-horizontal" method="post" action="{{action('DatosController@pagoss')}}">
{{ csrf_field() }}
<select class="" name="meses">
  <option value="">--Seleccionar mes--</option>
  <option value="1">Enero</option>
  <option value="2">Febrero</option>
  <option value="3">Marzo</option>
  <option value="4">Abril</option>
  <option value="5">Mayo</option>
  <option value="6">Junio</option>
  <option value="7">Julio</option>
  <option value="8">Agosto</option>
  <option value="9">Septiembre</option>
  <option value="10">Octubre</option>
  <option value="11">Noviembre</option>
  <option value="12">Diciembre</option>
</select>
<button type="submit" class="btn btn-primary">Buscar</button>
</form>


</div>






<!--<table id="reporte" class="display" cellspacing="0" width="100%"> width="100%"  HEIGHT="8" border="0" cellspacing="0" cellpadding="0" style="font-size:10px" -->

<div style="overflow-x:auto;">
<table id="example" class="display" cellspacing="0" width="100%">

      <thead >
        <tr>
          <th class="text-center">N°</th>
          <th class="text-center">Apellido Paterno</th>
          <th class="text-center">Apellido Materno</th>
          <th class="text-center">Nombre</th>
          <th class="text-center">Rut</th>
          <th class="text-center">Semestre que cursa</th>
          <th class="text-center">Semestre aprobados</th>
          <th class="text-center">Correo Electrónico</th>
          <th class="text-center">Dirección</th>
          <th class="text-center">Fechas</th>
          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">Fechas</th>
          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">Fechas</th>
          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">$ Total liquido</th>
          <th class="text-center">$ Total bruto</th>

          </tr>

      </thead>
      <tfoot>
        <tr>
          <th class="text-center">N°</th>
          <th class="text-center">Apellido Paterno</th>
          <th class="text-center">Apellido Materno</th>
          <th class="text-center">Nombre</th>
          <th class="text-center">Rut</th>
          <th class="text-center">Semestre que cursa</th>
          <th class="text-center">Semestre aprobados</th>
          <th class="text-center">Correo Electrónico</th>
          <th class="text-center">Dirección</th>
          <th class="text-center">Fechas</th>
          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">Fechas</th>
          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">Fechas</th>
          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">$ Total liquido</th>
          <th class="text-center">$ Total bruto</th>
        </tr>
      </tfoot>
      <tbody>

        @for($i=0 ; $i < $element ; $i++ )
        <tr>
          <td class="text-center">{{$i+1}}</td>
          <td class="text-center">{{$expos[$i]['alu_apellido_paterno']}}</td>
          <td class="text-center">{{$expos[$i]['alu_apellido_materno']}}</td>
          <td class="text-center">{{$expos[$i]['alu_nombre']}}</td>
          <td class="text-center"  >{{$expos[$i]['alu_rut']}}</td>
          <td class="text-center">{{$expos[$i]['semestre_actual']}}</td>

          <td class="text-center">{{$expos[$i]['semestres_aprobados']}}</td>
          <td class="text-center">{{$expos[$i]['alu_email']}}</td>
          <td class="text-center">{{$expos[$i]['direccion']}}</td>
          <td class="text-center">{{$fechamediodia[$i]}}</td>
          <td class="text-center">$ {{$medio[$i]}}</td>
          <td class="text-center">{{$canmedio[$i]}}</td>
          <td class="text-center">{{$fechadiacompleto[$i]}}</td>
          <td class="text-center"> ${{$completo[$i]}}</td>
          <td class="text-center">{{$cancompleto[$i]}}</td>
          <td class="text-center">{{$fechatarde[$i]}}</td>
          <td class="text-center"> ${{$tarde[$i]}}</td>
          <td class="text-center">{{$cantarde[$i]}}</td>
          <td class="text-center" >${{$total[$i] - $total[$i]*0.1  }}</td>
          <td class="text-center" >${{$total[$i]   }}</td>
          </tr>
          @endfor

      </tbody>
  </table>
</div>


<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js"> </script>
<script>


$(document).ready(function() {
  $('#example').DataTable( {

      dom: 'Bfrtip',
       buttons: [
           {
               extend: 'pdfHtml5',
               orientation: 'landscape',
               pageSize:'LEGAL',

           }
       ]
  } );
} );
</script>



</body>
@endsection
