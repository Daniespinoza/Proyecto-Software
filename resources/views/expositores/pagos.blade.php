@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Ver Pagos')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
  <h1>Sueldo del Mes {{Auth::user()->name}}</h1>
</div>
    <h4>Monto bruto total a pagar <strong>$ {{$pagar}}</strong></h4><br>
    <!--input type="text" name="total" value=" $ {{$pagar}}" disabled-->
<div class="table-responsive">
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="text-center" >Fecha</th>
        <th class="text-center" >Evento</th>
        <th class="text-center" >Organizador</th>
        <th class="text-center" >Monto</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th class="text-center" >Fecha</th>
        <th class="text-center" >Evento</th>
        <th class="text-center" >Organizador</th>
        <th class="text-center" >Monto</th>
      </tr>
    </tfoot>
    <tbody>
@for($i=0; $i< $max ; $i++)
      <tr>

        <td class="text-center" >{{$evento[$i][0]['start']}}</td>
        <td class="text-center" >{{$tipo[$i][0]['subtipo']}}</td>
        <td class="text-center" >{{$esta[$i][0]['nombre_establecimiento']}}</td>
        <td class="text-center" >{{$jornada[$i][0]['valor']}}</td>

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
