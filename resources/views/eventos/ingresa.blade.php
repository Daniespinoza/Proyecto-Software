@extends('layouts.master')

@section('title','Calendario')
@section('ventana','Agregar Evento')
@section('contenido')

<div class="row">
  <div class="col-md-4">

    <div class="page-header">
      <h1 align="center">Formulario de ingreso de nuevo evento</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
      <form name="create" class="form-horizontal "  method="post" action="{{url('eventos')}}">
      {{csrf_field()}}
          <div class="form-group">
                <label class="col-md-5 control-label no-padding-right"> Nombre de evento</label>
              <div class="col-md-7">
                <input class="form-control" type="text" name = "nombre"required/>
              </div>
          </div>



          <div class="form-group">
              <label class="col-md-5 control-label no-padding-right"> Tipo de evento </label>
                <div class="col-md-4">
                  <select class="" id="tipo" name="tipo_evento" required >

                  <option class="" name="tipo_evento" required>-- Seleccione un tipo de evento --</option>
                    @foreach($evento as $eve)
                    <option value="{{$eve['id']}}">{{$eve['subtipo']}}</option>
                    @endforeach

                  </select>
          </div>
        </div>

        <div class="form-group">
                <label class="col-md-3 control-label no-padding-right"> Otro</label>
                <div class="col-md-1">
          </div>
            <div class="col-md-1 checkbox">
              <input type="checkbox"  pattern=".{4,}"name="otros" onclick="document.create.tipo.disabled = true; document.create.tip.disabled = false; tip.disabled = !this.checked; tipo.disabled = this.checked;"/>

          </div>


            <div class="col-md-1">

            <input type="text" name="tipo_evento" id="tip" value="" disabled>
          </div>

          </div>

          <div class="form-group">
              <label class="col-md-5 control-label no-padding-right"> Establecimiento</label>
                <div class="col-md-7">
                  <div class="input-group">
                  <select class="" id="esta" name="esta" required >

                  <option class="" name="tipo_esta" required>-- Seleccione un Establecimiento --</option>
                    @foreach($establecimientos as $estab)
                    <option value="{{$estab['id']}}">{{$estab['rbd']}} / {{$estab['nombre_establecimiento']}}</option>
                    @endforeach
                  </select>
                   <input type="button" class="btn btn-success" onclick=" location.href='{{action('EstablecimientosController@create')}}' " value="Agregar nuevo" name="boton" />
                 </div>
                </div>

                </div>

          <div class="form-group">
              <label class="col-md-5 control-label no-padding-right"> Lugar de evento</label>
              <div class="col-md-7">
                <input class="form-control" type="text" name = "direccion" required/>
              </div>
          </div>

          <div class="form-group">
              <label class="col-md-5 control-label no-padding-right"> Descripción</label>
              <div class="col-md-7">
                <input class="form-control" type="text" name = "descripcion" />
              </div>
          </div>

            <div class="form-group">
                <label class="col-md-5 control-label no-padding-right"> Fecha</label>
                <div class="col-md-7">
                  <input type="datetime-local" name="fecha" value="" required>
              </div>
            </div>
          <div class="form-group">
              <label class="col-md-5 control-label no-padding-right">Cupos requeridos</label>
              <div class="col-md-3">
                <input type="number" name="cupos"  min="1" pattern="[0-9]" required>
            </div>
          </div>

            <div class="col-md-10"></div>
            <input type="submit" class="btn btn-primary">
            </div>
        </div>
      </form>


  </div>

  <div class="col-md-8">
<div class="page-content">

<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/es.js'></script>
<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			//defaultDate: '2017-11-12',
      timeFormat: 'H:mm',
			editable: false,
      navLinks: false,
      selectable: false,
			selectHelper: false,
			eventLimit: true, // allow "more" link when too many event
      events: {
        url: '/events',
        error: function() {
          $('#script-warning').show();
        }
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
      });

	});
</script>

<div id='calendar'></div>
</div>
</div>
</div>

@endsection
