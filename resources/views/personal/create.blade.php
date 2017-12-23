@extends('layouts.master')

@section('title','Personal')
@section('ventana','Agregar Personal')
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
  }if (data.length == 9){
    var x = data.replace('-','');
    var dv = data.slice(-1);
    var cpo = data.slice(0,-2);
    var suma= 0, c=2;
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
  <h1>Formulario Inscripción de Personal</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form class="form-horizontal" method="post" action="{{url('personal')}}">
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


        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
              <i class="ace-icon fa fa-warning"></i>
              <strong>Alerta! </strong>{{ $error }}
            </div>
            @endforeach
        @endif


<div class="form-group">
     <label class="col-md-3 control-label no-padding-right" for="form-field-1"> Nombre </label>
     <div class="col-md-4">
        <input class="form-control" type="text" name="nombre" required/>
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
          <label class="col-md-3 control-label no-padding-right"> RUT</label>
            <div class="col-md-4">
                <input type="text" id="rut" name="rut" oninput="validarRut(this.value)" class="form-control" pattern="([0-9]{8}|[0-9]{7})(-K|-[0-9]))" placeholder="11111111-K" required/>
            </div>
        </div>

        <!--div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> RUN</label>
            <div class="col-md-4">
                <input type="number" pattern="[0-9]" min="1" max="99999999" name="run" placeholder="rut sin puntos ni dígito verificador" class="form-control" required/>
            </div>
        </div-->

        <div class="form-group">
            <label class="col-md-3 control-label no-padding-right"> Permisos</label>
            <div class="col-md-4">

            <select class="form-control" name="rol" required>
              <option class="form-control" value="">-- Selecione un Rol --</option>

              @foreach($roles as $rol)
                <option class="form-control" value="{{ $rol['id']}}"> {{$rol['permiso']}}</option>
              @endforeach
          </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label no-padding-right"> Correo</label>
            <div class="col-md-4">
                <input type="email" id="correo" oninput="validaCorreo(this.value)" name="correo" minlength="15" class="form-control" placeholder="ejemplo@utem.cl" required />
            </div>
        </div>

    </div>
    <div class="col-md-6"></div>
    <input type="submit" id="submit" class="btn btn-primary">
  </div>

</form>
</div>



@endsection
