@extends('layouts.master')

@section('title','Calendario')
@section('ventana','Calendario')
@section('contenido')
<div class="row">
  <div class="col-md-4">

    <div class="page-header">
      <h1>Formulario de ingreso de nuevo evento</h1>
    </div>
    <div class="row">
    <div class="col-xs-12">
    <form class="form-horizontal "  method="post" action="{{url('eventos')}}">
    {{csrf_field()}}
        <div class="form-group">
              <label class="col-md-5 control-label no-padding-right"> Nombre de evento</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name = "nombre"required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label no-padding-right"> Tipo de evento </label>
              <div class="col-md-4">
                <select class="" name="tipo_evento">
                  @foreach($sub as $subt)
                  <option value="{{$subt['descripcion']}}">{{$subt['descripcion']}}</option>
                  @endforeach
                </select>
              </div>
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label no-padding-right"> Sub-Tipo de evento </label>
              <div class="col-md-4">
                <select class="" name="sub_tipo">
                  @foreach($evento as $eve)
                  <option value="{{$eve['id']}}">{{$eve['descripcion']}}</option>
                  @endforeach
                </select>
              </div>
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label no-padding-right"> Lugar de evento</label>
            <div class="col-md-4">
            <select class="" name="">
              @foreach($establecimientos as $esta)
              <option value="{{$esta['id']}}">{{$esta['nombre_establecimiento']}}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label no-padding-right"> Fecha</label>
            <div class="col-md-4">
    <input type="date" name="fecha" value="" required>

          </div>
          </div>
        <div class="form-group">
            <label class="col-md-5 control-label no-padding-right">Cupos requeridos</label>
            <div class="col-md-4">
              <input type="number" name="cupos" value="" required>
          </div>
          <br><br><br>
          <div class="col-md-6"></div>
          <input type="submit" class="btn btn-primary">
          </div>



        </div>


        </div>

    </form>



  </div>

  <div class="col-md-8">

<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/es.js'></script>
<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			defaultDate: '2017-11-12',
			editable: true,
      navLinks: true,
      selectable: true,
			selectHelper: true,
			eventLimit: true, // allow "more" link when too many events
			select: function(start, end) {
				var title = prompt('Event Title:');
				var cupos = prompt('cupos:');
				var hora = prompt('hora:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						cupos: cupos,
						hora: hora,
						start: start,

						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},

			events: [
				{
					title: 'Expo 1',
					start: '2017-11-01'

				},
				{
					title: 'Semana de exposiones',
					start: '2017-11-07',
					end: '2017-11-10'
				},
				{
					id: 999,
					title: 'Expo 2',
					start: '2017-11-09T16:00:00'
				},
				{
					id: 999,
					title: 'Expo Mapocho',
					start: '2017-11-16T16:00:00'
				}
			]
		});

	});
</script>

<div id='calendar'></div>
</div>
</div>

@endsection
