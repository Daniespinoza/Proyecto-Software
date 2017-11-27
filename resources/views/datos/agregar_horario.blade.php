@extends('layouts.master')

@section('title','Horario')
@section('ventana','Establecer Horario')
@section('contenido')

<div class="page-content">
<div class="page-header">
  <h1>Formulario Establecer mi Horario</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form id="formHorario" class="form-horizontal ingresar_solicitud" method="post" action="{{url('datos')}}">
<div class="form-group">
  {{csrf_field()}}
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Lunes </label>
        <div class="col-md-6">
          <label class="radio-inline"><input type="radio" name="lunes">Mañana</label>
          <label class="radio-inline"><input type="radio" name="lunes">Tarde</label>
          <label class="radio-inline"><input type="radio" name="lunes">Todo el día</label>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Martes </label>
        <div class="col-md-6">
          <label class="radio-inline"><input type="radio" name="martes">Mañana</label>
          <label class="radio-inline"><input type="radio" name="martes">Tarde</label>
          <label class="radio-inline"><input type="radio" name="martes">Todo el día</label>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Miercoles </label>
        <div class="col-md-6">
          <label class="radio-inline"><input type="radio" name="miercoles">Mañana</label>
          <label class="radio-inline"><input type="radio" name="miercoles">Tarde</label>
          <label class="radio-inline"><input type="radio" name="miercoles">Todo el día</label>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Jueves </label>
        <div class="col-md-6">
          <label class="radio-inline"><input type="radio" name="jueves">Mañana</label>
          <label class="radio-inline"><input type="radio" name="jueves">Tarde</label>
          <label class="radio-inline"><input type="radio" name="jueves">Todo el día</label>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Viernes </label>
        <div class="col-md-6">
          <label class="radio-inline"><input type="radio" name="viernes">Mañana</label>
          <label class="radio-inline"><input type="radio" name="viernes">Tarde</label>
          <label class="radio-inline"><input type="radio" name="viernes">Todo el día</label>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Sábado </label>
        <div class="col-md-6">
          <label class="radio-inline"><input type="radio" name="sabado">Mañana</label>
          <label class="radio-inline"><input type="radio" name="sabado">Tarde</label>
          <label class="radio-inline"><input type="radio" name="sabado">Todo el día</label>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-6 control-label no-padding-center"> <strong>Si no tiene disponibilidad un día, dejelo vacío</strong></label>

    </div>


      <div class="col-md-4 control-label no-padding-right">
          <div class="col-md-6"></div>
          <button type="button" id="btnLimpiar" class="btn btn-primary">Limpiar</button>
      </div>

      <div class="col-md-3 control-label no-padding-right">
        <div class="col-md-6">
          <input type="submit" class="btn btn-primary">
        </div>

    </div>


    </div>
    </div>

</form>
</div>
</div>
</div>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
   $("#btnLimpiar").click(function(event) {
	   $("#formHorario")[0].reset();
   });
</script>
@endsection
