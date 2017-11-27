@extends('layouts.master')

@section('title','Horario')
@section('ventana','Mi Horario')
@section('contenido')
<div class="page-header">
  <h1>Tu horario {{Auth::user()->name}}</h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" >Lunes</th>
        <th class="text-center" >Martes</th>
        <th class="text-center" >Miércoles</th>
        <th class="text-center" >Jueves</th>
        <th class="text-center" >Viernes</th>
        <th class="text-center" >Sábado</th>
        <th class="text-center" >Domingo</th>
        <th class="text-center" >Total Mañana</th>
        <th class="text-center" >Total Tarde</th>
        <th class="text-center" colspan="1">Acción</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        @if($horario[0]['lunes'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['lunes']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario[0]['martes'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['martes']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario[0]['miercoles'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['miercoles']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario[0]['jueves'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['jueves']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario[0]['viernes'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['viernes']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario[0]['sabado'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['sabado']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario[0]['domingo'] != 'Ninguno')
          <td class="text-center" >{{$horario[0]['domingo']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        <td class="text-center" >{{$horario[0]['total_m']}}</td>
        <td class="text-center" >{{$horario[0]['total_t']}}</td>
        <td class="text-center" ><a href="" class="btn btn-warning">Editar</a></td>

      </tr>

    </tbody>
  </table>
  </div>

@endsection
