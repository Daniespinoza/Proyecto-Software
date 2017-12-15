@extends('layouts.master')


@section('title','Mi Perfil')
@section('ventana','Mi Historial')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<div class="page-header">
  <h1>Tu historial {{Auth::user()->name}}</h1>
</div>
<div class="table-responsive">
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="text-center">Fecha</th>
        <th class="text-center">Evento</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Establecimiento</th>
        <th class="text-center">Dirección</th>
        <th class="text-center">Confirmar</th>
        <th class="text-center">Rechazar</th>
        <th class="text-center">Observaciones</th>
      </tr>
    </thead>
    <tfoot>
        <tr>
          <th class="text-center">Fecha</th>
          <th class="text-center">Evento</th>
          <th class="text-center">Tipo</th>
          <th class="text-center">Establecimiento</th>
          <th class="text-center">Dirección</th>
          <th class="text-center">Confirmar</th>
          <th class="text-center">Rechazar</th>
          <th class="text-center">Observaciones</th>
        </tr>
    </tfoot>
    <tbody>

        @for($i=0; $i< $max ; $i++)
              <tr>

                <td class="text-center" >{{\Carbon\Carbon::parse($evento[$i][0]['start'])->format('d/m/Y  H:m')}}</td>
                <td class="text-center" >{{$evento[$i][0]['title']}}</td>
                <td class="text-center" >{{$tipo[$i][0]['subtipo']}}</td>
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
                          <td class="text-center" ><b><font color="red"> Usted rechazó el turno </font></b></td>
                    @else
                        @if($fecha[$i]->invert == 1)
                          <td class="text-center" ><b><font color="green"> Turno confirmado </font></b></td>
                        @else
                          <td class="text-center" ><b><font color="red"> Usted no confirmó </font></b></td>
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
                <td class="text-center" ><b><font color="red"> Usted rechazó el turno </font></b></td>
                  @else
                      <td class="text-center" >Evento Finalizado</td>
                    @endif
                @endif

                @if($det[$i]['confirmacion'] == 2)
                <td class="text-center" ><b><font color="red"> Usted rechazó el turno </font></b></td>
                @else
                      @if($det[$i]['asistencia'] == 0 && $fecha[$i]->invert == 0 )
                      <td class="text-center" ><b><font color="red"> No asistió al evento </font></b></td>
                      @else
                          @if($det[$i]['asistencia'] == 1)
                              <td class="text-center" >Asistió</td>
                          @else
                              @if($det[$i]['confirmacion'] == 1)
                                <td class="text-center" ><b><font color="purple"> Recuerda asistir al evento</font></b></td>
                              @else
                                  <td class="text-center" ><b><font color="purple"> Recuerda Confirmar/Rechazar el evento </font></b></td>
                              @endif
                          @endif
                      @endif
                @endif
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



@endsection
