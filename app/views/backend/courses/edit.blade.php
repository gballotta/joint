@extends('mosaiclayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Modifica corso</span>
	</h2>
	@include('backend.courses.validationerrors')
	<br/><br/>
	{{ Form::model($corso, array('route' => array('courses.update', $corso->id), 'method' => 'PUT')) }}
	@include('backend.courses.form')
	{{ Form::submit('Aggiorna', array('class' => 'btn btn-primary btn-lg')) }}
	{{ Form::close() }}
</div>
@endsection