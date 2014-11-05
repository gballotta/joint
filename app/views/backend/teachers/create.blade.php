@extends('backendlayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Aggiungi un insegnante</span>
	</h2>
	@include('backend.teachers.validationerrors')
	<br/><br/>
	{{ Form::open(array('url' => 'teachers', 'method' => 'post')) }}
	@include('backend.teachers.form')
	{{ Form::submit('Crea', array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
</div>
@endsection