@extends('backendlayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Aggiungi una data</span>
	</h2>
	@include('backend.coursedates.validationerrors')
	<br/><br/>
	{{ Form::open(array('url' => 'coursedates', 'method' => 'post')) }}
	@include('backend.coursedates.form')
	{{ Form::submit('Crea', array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
</div>
@endsection