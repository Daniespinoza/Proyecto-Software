@extends('layouts.master')

@section('title','Generar Pagos')
@section('ventana','Generar Pagos')
@section('contenido')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
Nómina de pagos Estudiantes Expositores de Difusión UTEM

<div class="page-header">
  <h1></h1>
</div>
<input type="month" name="mes"  id="meses" onChange=cargar(this.value)>

<div style="overflow-x:auto;">
<table id="example" class="display" cellspacing="0" width="100%">
      <thead>
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
            <th class="text-center" colspan="2">Medio día de trabajo</th>
            <th class="text-center" colspan="2">Día completo de trabajo</th>
            <th class="text-center" colspan="2">Medio dia 18:00</th>
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

            <th class="text-center">Monto</th>
            <th class="text-center">N° dias</th>

            <th class="text-center">Monto</th>
            <th class="text-center">N° dias</th>
            <th class="text-center">Monto</th>
            <th class="text-center">N° dias</th>
            <th class="text-center">$ Total liquido</th>
            <th class="text-center">$ Total bruto</th>
          </tr>
      </thead>
      <tfoot>
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
          <th class="text-center" colspan="2">Medio día de trabajo</th>
          <th class="text-center" colspan="2">Día completo de trabajo</th>
          <th class="text-center" colspan="2">Medio dia 18:00</th>
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

          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>

          <th class="text-center">Monto</th>
          <th class="text-center">N° dias</th>
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
          <td class="text-center">{{$expos[$i]['alu_rut']}}</td>
          <td class="text-center">{{$expos[$i]['semestre_actual']}}</td>

          <td class="text-center">{{$expos[$i]['semestres_aprobados']}}</td>
          <td class="text-center">{{$expos[$i]['alu_email']}}</td>
          <td class="text-center">{{$expos[$i]['direccion']}}</td>
          <td class="text-center">$ {{$medio[$i]}}</td>
          <td class="text-center">{{$canmedio[$i]}}</td>
          <td class="text-center">$ {{$completo[$i]}}</td>
          <td class="text-center">{{$cancompleto[$i]}}</td>
          <td class="text-center">$ {{$tarde[$i]}}</td>
          <td class="text-center">{{$cantarde[$i]}}</td>
          <td class="text-center">$ {{$total[$i] - $total[$i]*0.1  }}</td>
          <td class="text-center">$ {{$total[$i]   }}</td>
          </tr>
          @endfor

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
<script>

 function cargar($id)
 {
    
 }

</script>



@endsection
