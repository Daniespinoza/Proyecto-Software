@extends('layouts.master')

@section('title','Turnos')
@section('ventana','Asignación de turnos a Evento')
@section('contenido')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


<div class="page-header">
  <h1>Asignación de turnos para evento:  <strong>{{$ev['title']}} </strong></h1>
</div>

<div class="page-content">

<div class="row">
  <div class="col-md-1"></div>

  <div class="col-md-6">
    <label for=""><strong>Expositores Disponibles {{$_cantidad}}</strong>&nbsp;&nbsp;&nbsp;</label>

    <select  id="sel" class="selectpicker" multiple title="Lista de Expositores" data-size="20" data-max-options="{{$ev['cupos']}}" >
      @foreach($_turns as $num)
      <optgroup label="{{$num}} turno/s" >
        @foreach($fin as $expo)
          @if($expo[4] == $num)
            <option value="{{$expo[0]}},{{$expo[1]}},{{$expo[2]}},{{$expo[3]}},{{$expo[4]}}">{{$expo[1]}} {{$expo[2]}} {{$expo[3]}}</option>
          @endif
        @endforeach
      </optgroup>
      @endforeach
    </select>

  </div>

  <div class="col-md-2">
    <input type="button" id="gen" class="btn btn-info" value="Seleccionar Expositores" onclick="llenar()"/>
  </div>

</div>

<br><br>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-8">
    <table class="table table-bordered table-responsive">
      <thead>
        <tr>
          <td class="hidden"><strong>ID</strong></td>
          <td><strong>Nombre</strong></td>
          <td><strong>Apellido Paterno</strong></td>
          <td><strong>Apellido Materno</strong></td>
          <td><strong>Turnos</strong></td>
        </tr>
      </thead>
      <tbody id="tabla">
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <div class="col-md-6"></div>
  <div class="col-md-1">
    <input type="button" id="confirmar" class="btn btn-success" value="Confirmar " onclick="ok()" disabled="true"/>
  </div>
  <div class="col-md-2">
    <input type="button" id="limpiar" class="btn btn-warning" value="Reestablecer los turnos" onclick="limpiar" disabled="true"/>
  </div>
</div>



</div>

<script>
  function llenar(){
    var x=document.getElementById("sel");
    var datos = [];
    for(var i = 0; i<x.options.length; i++){
      if(x.options[i].selected){
        var dato = x.options[i].value;
        datos.push(dato);
      }
    }
    for(var j=0 ; j<datos.length; j++){
      var row = "<tr>";
      var arr = datos[j].split(",");
      for(var k =1; k<arr.length ; k++){

        row += "<td>" + arr[k] + "</td>";
      }
      row += "</tr>"

      var btn = document.createElement("TR");
      btn.innerHTML=row;
      document.getElementById("tabla").appendChild(btn);
    }
    document.getElementById('gen').disabled=true;
    document.getElementById('confirmar').disabled=false;
    document.getElementById('limpiar').disabled=false;
  }
</script>



<script>
$(document).ready(function() {
  $('.selectpicker').selectpicker({
    style: 'btn-info',
    size: 4,
  });
});
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


@endsection
