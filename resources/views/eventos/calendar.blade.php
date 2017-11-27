@extends('layouts.master')

@section('title','Calendario')
@section('ventana','Calendario')
@section('contenido')
<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2017-11-12',
			editable: true,
      navLinks: true,
      selectable: true,
			eventLimit: true, // allow "more" link when too many events
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
@endsection
