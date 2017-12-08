@extends('layouts.master')

@section('title','Generar Pagos')
@section('ventana','Generar Pagos')
@section('contenido')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
Nómina de pagos Estudiantes Expositores de Difusión UTEM

<div class="page-header">
  <h1></h1>
</div>

<select class="" name="">
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

            <th class="text-center">Fecha</th>
            <th class="text-center">N° dias</th>

            <th class="text-center">Fecha</th>
            <th class="text-center">N° dias</th>
            <th class="text-center">Fecha</th>
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

          <th class="text-center">Fecha</th>
          <th class="text-center">N° dias</th>

          <th class="text-center">Fecha</th>
          <th class="text-center">N° dias</th>
          <th class="text-center">Fecha</th>
          <th class="text-center">N° dias</th>



          <th class="text-center">$ Total liquido</th>
          <th class="text-center">$ Total bruto</th>
        </tr>
      </tfoot>
      <tbody>



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
