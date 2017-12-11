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

  <div class="col-md-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
          <td><strong>ID</strong></td>
          <td><strong>Nombre</strong></td>
          <td><strong>Apellido_Paterno</strong></td>
          <td><strong>Apellido_Materno</strong></td>
          <td><strong>Turnos</strong></td>
        </tr>
      </thead>
      <tbody id="tabla">
      </tbody>
    </table>
  </div>
</div>

<div class="row">
    <div class="col-md-8">
    </div>
      <div class="col-md-1">
        &nbsp;
        <input type="button" id="limpiar" class="btn btn-warning" value="Limpiar" onclick="limpiar()" disabled="true"/>
      </div>
</div>

<div class="">
  <p id="json" class="hidden"></p>
</div>

<form name="create" class="form-horizontal "  method="post" action="{{url('/confirmar_turnos')}}">
{{csrf_field()}}
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7" >
      <input type="text" id="data" class="hidden" name="p" value="" />
    </div>
    <div class="row">
      <input type="number" class="hidden" name="id_evento" value="{{$ev['id']}}">
      <input type="text" class="hidden" name="dia_evento" value="{{$dia_ev}}">
      <input type="text" class="hidden" name="hora_evento" value="{{$hora_ev}}">
    </div>
    <br>
    <div class="row">
      <div class="col-md-8"></div>
    <div class="col-md-1">
      <input type="submit" id="confirmar" class="btn btn-success" value="Confirmar " onclick="submit()" disabled="true"/>
    </div>
  </div>
  </div>
</form>


<script>
$(document).ready(function(){
  $("#gen").click(function(){
      $("#data").val($("#json").text());
  });
});
$(document).ready(function(){
  $("#limpiar").click(function(){
      $("#data").val("");
  });
});
</script>


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
      for(var k =0; k<arr.length ; k++){

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

    var tableToObj = function( table ) {
    var trs = table.rows,
        trl = trs.length,
        i = 0,
        j = 0,
        keys = [],
        ret = [];

    for (; i < trl; i++) {
        if (i == 0) {
            for (; j < trs[i].children.length; j++) {
                keys.push(trs[i].children[j].innerHTML);
            }
        } else {
            obj = {};
            for (j = 0; j < trs[i].children.length; j++) {
                obj[keys[j]] = trs[i].children[j].innerHTML;
            }
            ret.push(obj);
        }
    }
    return ret;
    };
    document.getElementById('json').innerHTML = JSON.stringify(tableToObj(document.getElementsByTagName('table')[0]));
    var data = document.getElementById('r').innerHTML;


  }
  function limpiar(){
    document.getElementById('gen').disabled=false;
    document.getElementById('confirmar').disabled=true;
    document.getElementById('limpiar').disabled=true;
    var table = document.getElementById("tabla");
    var rowCount = table.rows.length;
    while(table.rows.length > 0) {
      table.deleteRow(0);
    }
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


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/default"+"-*.min.js"></script>


@endsection
