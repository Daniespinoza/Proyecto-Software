@extends('layouts.master')


@section('title','Mi Perfil')
@section('ventana','Mi Historial')
@section('contenido')

<div class="page-header">
  <h1>Tu historial {{Auth::user()->name}}</h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" >Fecha</th>
        <th class="text-center" >Evento</th>
        <th class="text-center" >Tipo</th>
        <th class="text-center" >Establecimiento</th>
        <th class="text-center" >Dirección</th>
        <th class="text-center" colspan="1">Confirmar</th>
        <th class="text-center" colspan="1">Rechazar</th>
        <th class="text-center" >Observaciones</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        @for($i=0; $i< $max ; $i++)
              <tr>

                <td class="text-center" >{{$evento[$i][0]['fecha_inicio']}}</td>
                <td class="text-center" >{{$tipo[$i][0]['subtipo']}}</td>
                <td class="text-center" >{{$tipo[$i][0]['descripcion']   }}</td>
                <td class="text-center" >{{$esta[$i][0]['nombre_establecimiento']}}</td>
                <td class="text-center" >{{$evento[$i][0]['direccion']}}</td>
                @if($det[$i]['confirmacion'] != 1 && $det[$i]['confirmacion'] != 2 && $fecha[$i]->invert == 1)
                  <td class="text-center" >
                    <form action="{{action('DatosController@updateAsistir',$det[$i])}}" method="post">
                        {{csrf_field()}}
                        <input name="asistir" type="hidden" value="1">
                        <button class="btn btn-primary" type="submit"><strong>Confirmar</strong></button>
                        </form>

                  </td>

                @else
                    @if($det[$i]['confirmacion'] ==2)
                          <td class="text-center" ><b><font color="red"> Usted Rechazo el turno </font></b></td>
                    @else
                        @if($fecha[$i]->invert == 1)
                          <td class="text-center" >Turno Confirmado</td>
                        @else
                          <td class="text-center" ><b><font color="red"> Usted No confirmo </font></b></td>
                        @endif
                    @endif

                @endif

                @if($fecha[$i]->m >=0 && $fecha[$i]->d >0 && $fecha[$i]->invert == 1 &&  $det[$i]['confirmacion'] !=2)
                  <td class="text-center" >
                    <form action="{{action('DatosController@updateAsistir',$det[$i])}}" method="post">
                        {{csrf_field()}}
                        <input name="asistir" type="hidden" value="2">
                        <button class="btn btn-danger" type="submit"><strong>Rechazar</strong></button>
                        </form>

                  </td>
                @else
                  @if($det[$i]['confirmacion'] == 2)
                <td class="text-center" ><b><font color="red"> Usted Rechazo el turno </font></b></td>
                  @else
                      <td class="text-center" >Evento Finalizado</td>
                    @endif
                @endif

                @if($det[$i]['confirmacion'] == 2)
                <td class="text-center" ><b><font color="red"> Usted Rechazo el turno </font></b></td>
                @else
                      @if($det[$i]['asistencia'] == 0 && $fecha[$i]->invert == 0 )
                      <td class="text-center" ><b><font color="red"> No asistió al evento </font></b></td>
                      @else
                          @if($det[$i]['asistencia'] == 1)
                              <td class="text-center" >Asistio</td>
                          @else
                              @if($det[$i]['confirmacion'] == 1)
                                <td class="text-center" >Recuerda asistir al evento</td>
                              @else
                                  <td class="text-center" >Recuerda Confirmar/Rechazar el evento </td>
                                @endif
                          @endif
                      @endif
                @endif
              </tr>
        @endfor


      </tr>

    </tbody>
  </table>
  </div>




@endsection
