@extends('layouts.master')

@section('title','Jornadas')
@section('ventana','Jornadas de trabajo')
@section('contenido')

<div class="page-header">
  <h1>Valor de turnos por jornadas</h1>
</div>

<script >
$(document).ready(function() {
  $("input").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
           // Allow: Ctrl/cmd+A
          (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
           // Allow: Ctrl/cmd+C
          (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
           // Allow: Ctrl/cmd+X
          (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
           // Allow: home, end, left, right
          (e.keyCode >= 35 && e.keyCode <= 39)) {
               // let it happen, don't do anything
               return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
  });
});
</script>

<div class="row">
  <form class="form-horizontal ingresar_solicitud" method="post" action="{{url('/actualizar_jornadas')}}">
    {{csrf_field()}}
    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[0]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="lu1" value="{{$jornadas[0]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[1]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name="lu2" value="{{$jornadas[1]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[2]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name="lu3" value="{{$jornadas[2]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[3]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name="sa1" value="{{$jornadas[3]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[4]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name="sa2" value="{{$jornadas[4]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[5]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name="do1" value="{{$jornadas[5]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-5 control-label no-padding-right">
      {{$jornadas[6]->descripcion}}
      </div>
      <div class="col-md-5">$
        <input type="number" step="1000" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  name="do2" value="{{$jornadas[6]->valor}}" style="width:90px;height:35px" min="0" required>
      </div>
    </div><br><br>

    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-5">
      <input type="submit" id="submit" class="btn btn-success" onclick="alertar()" value="Actualizar Montos"/>      </div>
    </div><br>
  </form>
</div>

<script>
  function alertar(){
    alert('Montos actualizados exitosamente.')
  }
</script>









@endsection
