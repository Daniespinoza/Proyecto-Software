@extends('layouts.master')

@section('title','Horario')
@section('ventana','Establecer Horario')
@section('contenido')
<style >
input[type=radio]
{
  transform: scale(2);
}
</style>

<div class="page-content">
<div class="page-header">
  <h1>Formulario Establecer mi Horario</h1>
</div>
<div class="row">
<div class="col-xs-12">
<form id="formHorario" class="form-horizontal ingresar_solicitud" method="post" action="{{url('horario')}}">
<div class="form-group">
  {{csrf_field()}}
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Lunes </label>
        <div class="col-md-6">
          {{ Form::radio('lunes','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('lunes','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('lunes','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('lunes','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Martes </label>
        <div class="col-md-6">
          {{ Form::radio('martes','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('martes','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('martes','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('martes','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Miércoles </label>
        <div class="col-md-6">
          {{ Form::radio('miercoles','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('miercoles','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('miercoles','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('miercoles','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Jueves </label>
        <div class="col-md-6">
          {{ Form::radio('jueves','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('jueves','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('jueves','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('jueves','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Viernes </label>
        <div class="col-md-6">
          {{ Form::radio('viernes','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('viernes','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('viernes','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('viernes','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Sábado </label>
        <div class="col-md-6">
          {{ Form::radio('sabado','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('sabado','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('sabado','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('sabado','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label no-padding-center"> Domingo </label>
        <div class="col-md-6">
          {{ Form::radio('domingo','Ninguno',array('required' => 'required')) }}&nbsp;&nbsp;&nbsp;Ninguno&nbsp;&nbsp;&nbsp;
          {{ Form::radio('domingo','Mañana') }}&nbsp;&nbsp;&nbsp;Mañana&nbsp;&nbsp;&nbsp;
          {{ Form::radio('domingo','Tarde') }}&nbsp;&nbsp;&nbsp;Tarde&nbsp;&nbsp;&nbsp;
          {{ Form::radio('domingo','Todo el Día') }}&nbsp;&nbsp;&nbsp;Todo el Día&nbsp;&nbsp;&nbsp;
        </div>
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
