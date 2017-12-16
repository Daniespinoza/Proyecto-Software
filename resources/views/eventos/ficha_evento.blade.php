@extends('layouts.master')


@section('title','Ficha Asistencia')
@section('ventana','Ficha de asistencia a Evento')
@section('contenido')



<div class="page-header">
  <h1>Ficha de Asistencia y Registro a Evento</h1>
  <h1 align="center"> <strong> {{$event['title']}}</strong></h1>

  </div>


<div class="row">
  <div class="col-md-2" ><h4 align="right"><strong>Fecha:</strong></h4></div>
  <div class="col-md-2">
    <h4 align="center">{{\Carbon\Carbon::parse($event['start'])->format('d/m/Y')}}</h4>
  </div>
  <div class="col-md-1"><h4 align="right"><strong>Horario:</strong></h4></div>
  <div class="col-md-2">
    <h4 align="center">{{\Carbon\Carbon::parse($event['start'])->format('H:m')}}</h4>
  </div>
  <div class="col-md-1"><h4 align="right"><strong>Lugar:</strong></h4></div>
  <div class="col-md-2">
    <h4 align="center">{{$event['direccion']}}</h4>
  </div>
</div>

<br>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-9">
    <table class="table table-bordered table-responsive">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">RUT</th>
          <th class="text-center">Nombre</th>
          <th class="text-center">Apellido Paterno</th>
          <th class="text-center">Apellido Materno</th>
          <th class="text-center">Polera</th>
          <th class="text-center">Poleron</th>
          <th class="text-center">Chaqueta</th>
          <th class="text-center">Firma</th>
        </tr>
      </thead>
      <tbody>
        @foreach($expos as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td width=10%>{{$post['alu_rut']}}</td>
          <td>{{$post['alu_nombre']}}</td>
          <td>{{$post['alu_apellido_paterno']}}</td>
          <td>{{$post['alu_apellido_materno']}}</td>
          <td align="center" width="8%"> <input type="checkbox"  align="center" class="checkbox" name="polera" value=""> </td>
          <td align="center" width="8%"> <input type="checkbox"  align="center" class="checkbox" name="poleron" value=""> </td>
          <td align="center" width="8%"> <input type="checkbox"  align="center" class="checkbox" name="chaqueta" value=""> </td>
          <td align="center" width="8%"> <input type="checkbox"  align="center" class="checkbox" name="firma" value=""> </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>





@endsection
