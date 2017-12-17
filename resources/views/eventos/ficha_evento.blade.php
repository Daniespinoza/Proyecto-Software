@extends('layouts.master')


@section('title','Ficha Asistencia')
@section('ventana','Ficha de asistencia y registro a Eventos')
@section('contenido')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<style>
td {
  text-align: center; /* center checkbox horizontally */
  vertical-align: middle; /* center checkbox vertically */
}
table {
    border: 1px solid;
    width: 200px;
}
input[type=checkbox]
{
  transform: scale(1.7);
}

</style>

<div class="page-header">
  <h1>Ficha de Asistencia y Registro a Eventos: &nbsp;&nbsp; <strong> {{$event['title']}}</strong></h1>
</div>

<div style="overflow-x:auto;">

<div class="row">
  <div class="col-md-4" ><h4 align="right"><strong>Fecha:</strong> {{\Carbon\Carbon::parse($event['start'])->format('d/m/Y')}}</h4></div>

  <div class="col-md-3"><h4 align="center"><strong>Horario:</strong> {{\Carbon\Carbon::parse($event['start'])->format('H:m')}}</h4></div>

  <div class="col-md-3"><h4 align="left"><strong>Lugar:</strong> {{$event['direccion']}}</h4></div>

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
          <th class="text-center">Apellido_Paterno</th>
          <th class="text-center">Apellido_Materno</th>
          <th class="text-center">Polera</th>
          <th class="text-center">Poleron</th>
          <th class="text-center">Chaqueta</th>
          <th class="text-center">Firma</th>
        </tr>
      </thead>
      <tbody id="myTable1">
        @foreach($expos as $post)
        <tr>
          <td>{{$post['id']}}</td>
          <td width=10%>{{$post['alu_rut']}}</td>
          <td>{{$post['alu_nombre']}}</td>
          <td>{{$post['alu_apellido_paterno']}}</td>
          <td>{{$post['alu_apellido_materno']}}</td>
          <td align="center" width="8%"> <input type="checkbox" style="width:60px;height:17px" align="center" id="pola" name="polera" ><span id="pola2"></span> </td>
          <td align="center" width="8%"> <input type="checkbox" style="width:60px;height:17px" align="center" name="poleron" /> </td>
          <td align="center" width="8%"> <input type="checkbox" style="width:60px;height:17px" align="center" name="chaqueta" > </td>
          <td align="center" width="10%"> <input type="checkbox"  style="width:60px;height:17px" align="center" name="firma" > </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-4">
    Busca elemento en la tabla de materiales: &nbsp;&nbsp;&nbsp;&nbsp;<input id="myInput" type="text" placeholder="Buscar..">
    <br><br>

    <table class="table table-bordered table-responsive" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Nombre</th>
          <th align="center" width="10%">Disponibles</th>
          <th align="center" width="10%">Utilizados</th>
        </tr>
      </thead>
      <tbody id="myTable">
        @foreach($materiales as $post)
        <tr>
          <td width="9%">{{$post['id']}}</td>
          <td>{{$post['descripcion']}}</td>
          <td>{{$post['stock_total']}}</td>
          <td> <input type="number" style="width:60px;height:25px" min="0" name="usado" pattern="[0-9]" max="{{$post['stock_total']}}" value="0" > </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-md-5">
    <label for=""><strong>Seleccione Encargado del turno</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

    <select id="sel" class="selectpicker" multiple title="Lista de Expositores" data-size="20" data-max-options="1" required>
      @foreach($expos as $post)
          <option value="{{$post['id']}},{{$post['alu_nombre']}},{{$post['alu_apellido_paterno']}},{{$post['alu_apellido_materno']}}">{{$post['alu_nombre']}} {{$post['alu_apellido_paterno']}} {{$post['alu_apellido_materno']}}</option>
      @endforeach
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" id="gen" class="btn btn-info" value="Confirmar" onclick="seleccionar()"/>

    <br><br><br>

    <p><strong>Encargado: &nbsp;&nbsp;</strong><span id="enc"></span> </p>
    <p id="id_enc" class="hidden" ></p>
    <strong>Dinero asignado al turno: &nbsp;&nbsp;</strong> <input type="number" id="dinero" style="width:90px;height:28px" min="0" name="dinero"  value="0" disabled />
    &nbsp;&nbsp;&nbsp;&nbsp;<strong>Horas trabajadas: &nbsp;&nbsp;</strong> <input type="number" id="horas" style="width:90px;height:28px" min="0" max="12" name="horas"  value="0" disabled />
    <br><br>
    <select id="sel_t" class="selectpicker" multiple title="Transporte utilizado" data-size="8" data-max-options="1" value="">
      <option value="No requiere" >No requiere</option>
      <option value="Vehículo Institucional" >Vehículo Institucional</option>
      <option value="Radio taxi" >Radio taxi</option>
      <option value="Transantiago" >Transantiago</option>
      <option value="Taxi" >Taxi</option>
      <option value="Colectivo" >Colectivo</option>
      <option value="Bus Interurbano" >Bus Interurbano</option>
      <option value="Otro" >Otro</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" id="gentransp" class="btn btn-info" value="Confirmar" onclick="transporte()" />
    <br><br>
    <p><strong>Transporte: &nbsp;&nbsp;</strong><span id="transp"></span> </p>
    <br>
    <h4 align="center">Al pulsar "Continuar", está confirmando sus datos ingresados </h4>
    <h4 align="center">Si desea cambiar algo despues de confirmar, vuelva a seleccionar sus datos y confirme nuevamente. </h4><br>
    <div class="col-md-4"></div>
    <div class="col-md-2">
      <input type="button" id="subbutton" class="btn btn-info"  value="Confirmar" />
    </div>
    <p id="json" class="hidden" ></p>
    <p id="json2" class="hidden" ></p>
    <br><br><br>
    <!--Formulario Ficha-->
    <form name="create" class="form-horizontal"  method="post" action="{{action('EventosController@confirmarFicha')}}">
    {{csrf_field()}}
      <input type="text" id="data" class="hidden" name="expos" value="" />
      <input type="text" id="data2" class="hidden" name="mates" value="" />
      <input type="text" id="et" class="hidden" name="enc_t" value="" />
      <input type="text" id="money" class="hidden" name="money" value="" />
      <input type="text" id="tp" class="hidden" name="trsp" value="" />
      <input type="text" id="hr" class="hidden" name="horas" value="" />
      <input type="text" class="hidden" name="evento" value="{{$event['id']}}" />
      <h2 align="center">Para confirmar solicitud y enviar Ficha, pulse "Enviar Formulario"</h1>
        <div class="col-md-4"></div>
        <div class="col-md-2">
            <input type="submit" id="cf" class="btn btn-success" value="Enviar Formulario" onclick="submit()" disabled/>
        </div>

    </form>
    <!--Fin formulario ficha-->
  </div>
</div>

</div>

<script>
  $("#subbutton").click(function() {
    confirm();
  });
  function html2json() {
    var json = '{';
    var otArr = [];

    var tbl2 = $('table #myTable1 tr').each(function(e) {
      x = $(this).children();
      var itArr = [];
      x.each(function(e) {
        var items='';
         if(e == 0){
            items +='"id" : "'+ $(this).text()+'"';
         }
         if(e == 1){
            items +='"rut" : "' +$(this).text()+'"';
         }
         if(e == 2){
            items +='"nombre" : "' +$(this).text()+'"';
         }
         if(e == 3){
            items +='"paterno" : "' +$(this).text()+'"';
         }
         if(e == 4){
            items +='"materno" : "' +$(this).text()+'"';
         }
         if(e == 5){
            var chk = $(this).closest('tr').find('input:checkbox');
            items +='"polera" : "' +chk[0].checked+'"';
         }
         if(e == 6){
           var chk = $(this).closest('tr').find('input:checkbox');
            items +='"poleron" : "' +chk[1].checked+'"';
         }
         if(e == 7){
           var chk = $(this).closest('tr').find('input:checkbox');
            items +='"chaqueta" : "' +chk[2].checked+'"';
         }
         if(e == 8){
           var chk = $(this).closest('tr').find('input:checkbox');
            items +='"firma" : "' +chk[3].checked+'"';
         }
         itArr.push(items);
      });

      otArr.push('"' + (e+1) + '": {' + itArr.join(',') + '}');
    })
    json += otArr.join(",") + '}';

    document.getElementById('json').innerHTML = json;

    //alert(json);

  }

  function html3json() {
    var json = '{';
    var otArr = [];

    var tbl2 = $('table #myTable tr').each(function(e) {
      x = $(this).children();
      var itArr = [];
      x.each(function(e) {
        var items='';
         if(e == 0){
            items +='"id" : "'+ $(this).text()+'"';
         }
         if(e == 1){
            items +='"nombre" : "' +$(this).text()+'"';
         }
         if(e == 2){
            items +='"disponibles" : "' +$(this).text()+'"';
         }
         if(e == 3){
           var chk = $(this).closest('tr').find('input:input')
            items +='"utilizados" : "' +chk[0].value+'"';
         }
         itArr.push(items);
      });

      otArr.push('"' + (e+1) + '": {' + itArr.join(',') + '}');
    })
    json += otArr.join(",") + '}';

    document.getElementById('json2').innerHTML = json;

  //  alert(json);
  }
  function confirm(){
    if($("#horas").val() == 0){
      alert("Debe indicar horas trabajadas");
    }
    else if(document.getElementById('sel').value == ""){
      alert("Debe seleccionar un encargado.");
    }
    
    else if(document.getElementById('sel_t').value == ""){
      alert("Debe seleccionar transporte.");
    }
    else{
      document.getElementById('cf').disabled=false;
      var json = html2json();
      var json2 = html3json();
      $("#data").val($("#json").text());
      $("#data2").val($("#json2").text());
      $("#et").val($("#id_enc").text());
      $("#money").val($("#dinero").val());
      $("#tp").val($("#transp").text());
      $("#hr").val($("#horas").val());
    }
  }
</script>


<script>
  function seleccionar(){
      var data = document.getElementById('sel').value;
      if(data != ""){
        var expositor = data.split(',');
        var exp = expositor[1]+' '+expositor[2]+' '+expositor[3];
        $('#enc').text(exp);
        $('#id_enc').text(expositor[0]);
        document.getElementById('dinero').disabled=false;
        document.getElementById('horas').disabled=false;
      }
      else{
        alert('Debe seleccionar un Expositor');
      }
  }
  function transporte(){
    var data = document.getElementById('sel_t').value;
    if(data != ""){
      $('#transp').text(data);
    }
    else{
      alert('Debe seleccionar el transporte utilizado.');
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
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/default"+"-*.min.js"></script>

@endsection
