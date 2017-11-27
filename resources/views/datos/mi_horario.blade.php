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
        @if($horario['lunes'] != 'Ninguno')
          <td class="text-center" >{{$horario['lunes']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario['martes'] != 'Ninguno')
          <td class="text-center" >{{$horario['martes']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario['miercoles'] != 'Ninguno')
          <td class="text-center" >{{$horario['miercoles']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario['jueves'] != 'Ninguno')
          <td class="text-center" >{{$horario['jueves']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario['viernes'] != 'Ninguno')
          <td class="text-center" >{{$horario['viernes']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario['sabado'] != 'Ninguno')
          <td class="text-center" >{{$horario['sabado']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        @if($horario['domingo'] != 'Ninguno')
          <td class="text-center" >{{$horario['domingo']}}</td>
        @else
          <td class="text-center" style="color:Red;">No Disponible</td>
        @endif

        <td class="text-center" >{{$horario['total_m']}}</td>
        <td class="text-center" >{{$horario['total_t']}}</td>
        <td class="text-center" ><a href="" class="btn btn-success"><strong>Actualizar</strong></a></td>

      </tr>

    </tbody>
  </table>
  </div>

@endsection
