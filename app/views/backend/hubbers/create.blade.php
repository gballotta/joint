@extends('backendlayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Aggiungi un utente</span>
	</h2>
	@include('backend.hubbers.validationerrors')
	<br/><br/>
	{{ Form::open(array('url' => 'hubbers', 'method' => 'post')) }}
	@include('backend.hubbers.form')
	{{ Form::submit('Crea', array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
</div>
@endsection