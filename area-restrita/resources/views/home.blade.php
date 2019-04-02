@extends('layouts.master')

@section('title') Calendário @endsection
@section('subtitle') Home @endsection

@section('content')
<div class="panel panel-default">
    <a href="#page-stats" class="panel-heading" data-toggle="collapse">Eventos do Mês</a>
    <div id="page-stats" class="panel-collapse panel-body collapse in">
        <div style="float:right; margin-bottom: 1em;">
            <a href="#" class="btn btn-primary"><span class="fa fa-plus-square-o"></span> Novo Evento</a>
        </div>
        <div id='calendar'></div>
    </div>
</div>
@endsection

@push('styles')
<link rel='stylesheet' type='text/css' href="{{ asset('lib/fullcalendar-1.6.4/fullcalendar/fullcalendar.css')}}" />
<link rel='stylesheet' type='text/css' href="{{ asset('lib/fullcalendar-1.6.4/fullcalendar/fullcalendar.print.css')}}" media='print' />
    
@endpush
@push('scripts')
<script type='text/javascript' src="{{ asset('lib/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('lib/fullcalendar-1.6.4/fullcalendar/eventos.js')}}"></script>

<script type='text/javascript'>

	// $(document).ready(function() {

	// 	var date = new Date();
	// 	var d = date.getDate();
	// 	var m = date.getMonth();
	// 	var y = date.getFullYear();

	// 	$('#calendar').fullCalendar({
    //         header: false,
	// 	});
    //     $('#calendar').fullCalendar('next');

	// });

</script>    
@endpush