@extends('layouts.master')


@section('title','Expositores')
@section('ventana','Agregar Expositor')
@section('contenido')

<script>
function validarRut(data){
  if (data.length == 10){
    var x = data.replace('-','');
    var dv = data.slice(-1);
    var cpo = data.slice(0,-2);
    var suma= 0, c=3;
    for(var i = 0; i< cpo.length ;i++){
        if(c==1){ c = 7; }
        suma += parseInt(cpo[i]) * c;
        c--;
    }
    var rest = 11 - (suma%11);
    if (rest == 11){ rest = 0; }
    if (rest == 10){ rest = 'K'; }

    if(rest != dv)
    {
      $('#de').fadeIn();
      document.getElementById('submit').disabled=true;
    }
    else{
      $('#de').fadeOut();
      document.getElementById('submit').disabled=false;
    }
  }
}
</script>

<script>
function validaCorreo(data){
  document.getElementById('submit').disabled=true;
  if (data.length >14){
    var utem = data.slice(-8);
    if(utem == '@utem.cl'){
      $('#di').fadeOut();
      document.getElementById('submit').disabled=false;
    }
    else{
      $('#di').fadeIn();
    }
  }
}
</script>


<div class="page-content">
<div class="page-header">
  <h1>Formulario Inscripción de Expositor</h1>
</div>
<div class="row">
  @if ($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        <i class="ace-icon fa fa-warning"></i>
        <strong>Alerta! </strong>{{ $error }}
      </div>
      @endforeach
  @endif




<div class="col-xs-12">

<form class="form-horizontal "  method="post" action="{{url('expositores')}}">
{{csrf_field()}}

<div class="form-group">
  <div class="col-md-3"></div>
    <div class="alert alert-danger col-md-4 " style="display: none" id="de">
      <i class="ace-icon fa fa-warning"></i>
      <strong>Alerta! </strong> Dígito verificador inválido. Si es k, utilice mayúsculas
    </div>
</div>

<div class="form-group">
  <div class="col-md-3"></div>
    <div class="alert alert-warning col-md-4 " style="display: none" id="di">
      <i class="ace-icon fa fa-warning"></i>
      <strong>Cuidado! </strong> Recuerda que el correo debe terminar con @utem.cl
    </div>
</div>


<div class="form-group">

     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Rut </label>
     <div class="col-md-4">
        <input id="rut" class="form-control" oninput="validarRut(this.value)" type="text" name="rut" placeholder="11111111-K" pattern="[0-9]{8}(-[0-9]|-K)"required/>
      </div>
    </div>

    <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Nombre </label>
        <div class="col-md-4">
          <input class="form-control" type="text" name = "nombre"required/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Apellido Paterno </label>
          <div class="col-md-4">
              <input class="form-control" type="text" name="ap_pat" required/>
          </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Apellido Materno </label>
        <div class="col-md-4">
            <input class="form-control" type="text" name="ap_mat" required/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Género</label>
        <div class="col-md-4">
          <select class="form-control" name="genero" required>
            <option value="">--Seleccione un Género--</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>

      </div>
      </div>
    <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Región</label>
        <div class="col-md-4">
          <select class="form-control" name="regiones" onchange="load(this.value)" required>
            <option value="">-- Seleccione una región --</option>
          @foreach ($regions as $region)
            <option value="{{$region['id']}}">{{$region['nombre']}}</option>
        @endforeach
        </select>
        <input  type="checkbox" name="otraReg" value="1"/>otra
      </div>
      </div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Comuna</label>
          <div class="col-md-4">
            <div id="demo">
            <select class="form-control" name="comuna" required>
              <option value="">-- Seleccione una Comuna --</option>
        </div>
          <input  type="checkbox" name="otraCom" value="si"/>otra
        </select>
        </div>
</div>
<div class="form-group"></div>

<div class="form-group">
  <label class="col-md-3 control-label no-padding-right"> Dirección</label>
<div class="col-md-4">
  <input type="text" name="direccion" class="form-control" placeholder="dirección ejemplo #334"required/>
</div>
</div>
      <div class="form-group">
          <label class="col-md-3 control-label no-padding-right">Teléfono</label>
          <div class="col-md-4">
          <input type="number" class="form-control" name = "telefono" pattern="[0-9]" max="99999999999" placeholder="56999887766" required/>
      </div>
    </div>
  <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Carrera</label>
        <div class="col-md-4">
          <select class="form-control" name="carrera"  required>
            <option value="">-- Seleccione una Carrera --</option>

          @foreach ($carreras as $carrera)
            <option value="{{$carrera['id']}}">{{$carrera['nombre']}}</option>

        @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-right"> Semestre Actual </label>
      <div class="col-md-4">
        <input type="number" class="form-control"  patter="[0-9]" name = "sem" required/>
      </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 control-label no-padding-right"> Correo </label>
        <div class="col-md-4">
          <input type="email" class="form-control"  oninput="validaCorreo(this.value)" minlength="15"  placeholder="ejemplo@utem.cl" name = "mail" required/>
        </div>
        <div class="col-md-3 control-label no-padding-right">

        </div>
      </div>
      <div class="col-md-6"></div>
      <input type="submit" id="submit" class="btn btn-primary">


    </div>


    </div>

</form>
</div>

<script type="text/javascript">
function load(x) {
  $.getJSON( "/comuna", function( data ) {
    $( "#demo" ).empty();
    var items = [];
  items.push('<option value="">-- Seleccione una Comuna --</option>');
  $.each( data, function( key, val ) {
    if(val.id_region==x){items.push( "<option value='" + val.id + "'>" + val.nombre + "</option>" );}
  });
  $( "<select/>", {
    "class": "form-control",
    "name": "comuna",
    html: items.join( "" )
  }).appendTo( "#demo" );
  });
}
</script>



@endsection
