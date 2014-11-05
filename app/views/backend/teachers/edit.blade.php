@extends('mosaiclayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Modifica insegnante</span>
	</h2>
	@include('backend.teachers.validationerrors')
	<br/><br/>
	{{ Form::model($teacher, array('route' => array('teachers.update', $teacher->id), 'method' => 'PUT')) }}
	@include('backend.teachers.form')
	{{ Form::submit('Aggiorna', array('class' => 'btn btn-primary btn-lg')) }}
	{{ Form::close() }}
</div>
@endsection