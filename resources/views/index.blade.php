@extends('layouts.master')

@section('title','Inicio')
@section('contenido')

<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/es.js'></script>

<div class="page-header">
  <h1 id="title" align="center"/>
</div>
<div class="container">

  <script>
  var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  var m = new Date();
  document.getElementById("title").innerHTML = "Calendario de Actividades de " + monthNames[m.getMonth()] + " de " + m.getFullYear();
  </script>


<script>
$(document).ready(function() {
  $('#calendar').fullCalendar({
    //defaultDate: '2017-11-12',
    header: {
    left: '',
    center: '',
    right: ''
    },
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
    },
    viewRender: function(currentView){
		var minDate = moment(),
		maxDate = moment().add(2,'weeks');
		// Past
		if (minDate >= currentView.start && minDate <= currentView.end) {
			$(".fc-prev-button").prop('disabled', true);
			$(".fc-prev-button").addClass('fc-state-disabled');
		}
		else {
			$(".fc-prev-button").removeClass('fc-state-disabled');
			$(".fc-prev-button").prop('disabled', false);
		}
		// Future
		if (maxDate >= currentView.start && maxDate <= currentView.end) {
			$(".fc-next-button").prop('disabled', true);
			$(".fc-next-button").addClass('fc-state-disabled');
		} else {
			$(".fc-next-button").removeClass('fc-state-disabled');
			$(".fc-next-button").prop('disabled', false);
		}
	   }
    });

});
</script>

<div id='calendar'></div>

</div>

@endsection
