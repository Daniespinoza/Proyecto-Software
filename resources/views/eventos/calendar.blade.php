@extends('layouts.master')

@section('title','Calendario')
@section('ventana','Calendario')
@section('contenido')
<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/es.js'></script>

<div class="row">
	<div class="col-md-4">


	</div>
	<div class="col-md-8">



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
