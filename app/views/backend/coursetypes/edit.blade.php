@extends('mosaiclayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Modifica tipo di corso</span>
	</h2>
	@include('backend.coursetypes.validationerrors')
	<br/><br/>
	{{ Form::model($corso, array('route' => array('coursetypes.update', $corso->id), 'method' => 'PUT')) }}
	@include('backend.coursetypes.form')
	{{ Form::submit('Aggiorna', array('class' => 'btn btn-primary btn-lg')) }}
	{{ Form::close() }}
</div>
@endsection