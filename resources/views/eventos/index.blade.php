@extends('layouts.master')

@section('title','Eventos')
@section('ventana','Calendario de Eventos')
@section('contenido')

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
<div class="page-content">
  <div id='calendar'></div>

</div>

@endsection
