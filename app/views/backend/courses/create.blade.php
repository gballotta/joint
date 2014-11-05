@extends('backendlayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Aggiungi un corso</span>
	</h2>
	@include('backend.courses.validationerrors')
	<br/><br/>
	{{ Form::open(array('url' => 'courses', 'method' => 'post')) }}
	@include('backend.courses.form')
	{{ Form::submit('Crea', array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
</div>
@endsection