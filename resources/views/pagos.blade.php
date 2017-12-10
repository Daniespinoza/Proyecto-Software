@extends('layouts.master')

@section('title','Generar Pagos')
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
<body>

</div>




<div style="overflow-x:auto;">


<!--<table id="reporte" class="display" cellspacing="0" width="100%"> width="100%"  HEIGHT="8" border="0" cellspacing="0" cellpadding="0" style="font-size:10px" -->
<div class="" id="reporte">
<table id="reportes" class="table " >

      <thead >


            <th  align="center"><center> N°</center> </th>
            <th align="center" >Apellido Paterno</th>
            <th align="center" >Apellido Materno</th>
            <th align="center">Nombre</th>
            <th class="text-center">Rut</th>

            <th align="center">S.Actual</th>
            <th align="center">S.Aprobados</th>
            <th class="center">Correo Electrónico</th>
            <th align="center">Dirección</th>

            <th align="center">Fechas</th>
            <th align="center">Monto</th>
            <th align="center">N° dias</th>

            <th align="center">Fechas</th>
            <th align="center">Monto</th>
            <th align="center">N° dias</th>
            <th align="center">Fechas</th>
            <th align="center">Monto</th>
            <th align="center">N° dias</th>
            <th align="center">$ Total liquido</th>
            <th align="center">$ Total bruto</th>


      </thead>
    <!--  <tfoot>
        <tr>
          <th class="text-center"></th>
          <th class="text-center"></th>
          <th class="text-center"></th>
          <th class="text-center"></th>
          <th class="text-center"></th>

          <th class="text-center"></th>
          <th class="text-center"></th>
          <th class="text-center"></th>
          <th class="text-center"></th>
          <th class="text-center" colspan="3">Medio día de trabajo</th>
          <th class="text-center" colspan="3">Día completo de trabajo</th>
          <th class="text-center" colspan="3">Medio dia 18:00</th>
          <th class="text-center"></th>
          <th class="text-center"></th>


        </tr>
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
      </tfoot>-->
      <tbody>

        @for($i=0 ; $i < $element ; $i++ )
        <tr>
          <td class="text-center"nowrap>{{$i+1}}</td>
          <td class="text-center"nowrap>{{$expos[$i]['alu_apellido_paterno']}}</td>
          <td class="text-center"nowrap>{{$expos[$i]['alu_apellido_materno']}}</td>
          <td class="text-center"nowrap>{{$expos[$i]['alu_nombre']}}</td>
          <td class="text-center" nowrap >{{$expos[$i]['alu_rut']}}</td>
          <td class="text-center"nowrap>{{$expos[$i]['semestre_actual']}}</td>

          <td class="text-center"nowrap>{{$expos[$i]['semestres_aprobados']}}</td>
          <td class="text-center"nowrap>{{$expos[$i]['alu_email']}}</td>
          <td class="text-center"nowrap>{{$expos[$i]['direccion']}}</td>
          <td class="text-center"nowrap>{{$fechamediodia[$i]}}</td>
          <td class="text-center"nowrap>$ {{$medio[$i]}}</td>
          <td class="text-center"nowrap>{{$canmedio[$i]}}</td>
          <td class="text-center"nowrap>{{$fechadiacompleto[$i]}}</td>
          <td class="text-center"nowrap> $  {{$completo[$i]}}</td>
          <td class="text-center"nowrap>{{$cancompleto[$i]}}</td>
          <td class="text-center"nowrap>{{$fechatarde[$i]}}</td>
          <td class="text-center"nowrap> $  {{$tarde[$i]}}</td>
          <td class="text-center"nowrap>{{$cantarde[$i]}}</td>
          <td class="text-center" nowrap>$ {{$total[$i] - $total[$i]*0.1  }}</td>
          <td class="text-center" nowrap>$ {{$total[$i]   }}</td>
          </tr>
          @endfor

      </tbody>
  </table>
</div>

</div>


<input name="Imprimir" onclick="DescargarPDF('reporte','Archivo')"  type="submit" id="Imprimir" value="Descargar PDF" />



<!--<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->

<!--

<script>

$(document).ready(function() {
  $('#reporte').DataTable( {
      "language": {
          "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      }
  } );
} )
</script>
-->

<script>

function DescargarPDF(ContenidoID,nombre) {

  var pdf = new jsPDF('l', 'pt', 'A2');

  var html = $('#'+ContenidoID).html();

  specialElementHandlers = {};

  margins = {top: 30, left: 5 , width:5};
  pdf.text(20,20,"Nómina de pagos Estudiantes Expositores de Difusión UTEM");

  pdf.setFontSize(2);

  pdf.fromHTML(html ,
     margins.left, margins.top,  {'width': margins.width} ,
     function (dispose)
      {pdf.save(nombre+'.pdf');},
       margins);

}
</script>

</body>
@endsection
