@extends('layouts.master')

@section('title','Expositores')
@section('ventana','Ver Pagos')
@section('contenido')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<div class="page-header">
  <h1>Sueldo: {{$fecha}}</h1>
</div>
<div class="form-group">

<h4>Monto bruto total a pagar <strong>$ {{$pagar}}</strong></h4><br>
</div>

<div class="form-group">
<form class="form-horizontal" method="post" action="{{action('ExpositoresController@Pagoss')}}">
{{ csrf_field() }}

<input type="month" name="meses" value="">
<button type="submit" class="btn btn-primary">Buscar</button>
</form>
</div>

    <!--input type="text" name="total" value=" $ {{$pagar}}" disabled-->
<div class="table-responsive">
  <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="text-center" >Fecha</th>
        <th class="text-center" >Evento</th>
        <th class="text-center" >Tipo</th>
        <th class="text-center" >Organizador</th>
        <th class="text-center" >Dirección</th>
        <th class="text-center" >Monto</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th class="text-center" >Fecha</th>
        <th class="text-center" >Evento</th>
        <th class="text-center" >Tipo</th>
        <th class="text-center" >Organizador</th>
        <th class="text-center" >Dirección</th>
        <th class="text-center" >Monto</th>
      </tr>
    </tfoot>
    <tbody>
@for($i=0; $i< $max ; $i++)
      <tr>

        <td class="text-center" >{{\Carbon\Carbon::parse($evento[$i][0]['start'])->format('d/m/Y')}}</td>
        <td class="text-center" >{{$evento[$i]['title']}}</td>
        <td class="text-center" >{{$tipo[$i]['subtipo']}}</td>
        <td class="text-center" >{{$esta[$i]['nombre_establecimiento']}}</td>
        <td class="text-center" >{{$evento[$i]['direccion']}}</td>
        <td class="text-center" >$ {{$jornada[$i]['valor']}}</td>

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
