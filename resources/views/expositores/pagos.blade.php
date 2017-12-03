@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Ver Pagos')
@section('contenido')
<div class="page-header">
  <h1>Sueldo del Mes {{Auth::user()->name}}</h1>
</div>
<div class="table-responsive">
    <label for="">Monto bruto total a pagar </label>
    <input type="text" name="total" value="{{$pagar}}" disabled>
    <table class="table table-bordered">
    <thead>
      <tr>

        <th class="text-center" >Fecha</th>
        <th class="text-center" >Evento</th>
        <th class="text-center" >Organizador</th>

        <th class="text-center" >Monto</th>




      </tr>
    </thead>
    <tbody>
@for($i=0; $i< $max ; $i++)
      <tr>

        <td class="text-center" >{{$evento[$i][0]['fecha_inicio']}}</td>
        <td class="text-center" >{{$tipo[$i][0]['subtipo']}}</td>
        <td class="text-center" >{{$esta[$i][0]['nombre_establecimiento']}}</td>
        <td class="text-center" >{{$jornada[$i][0]['valor']}}</td>




      </tr>
      @endfor

    </tbody>
  </table>

  </div>

@endsection
