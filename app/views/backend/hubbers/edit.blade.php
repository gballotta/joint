@extends('mosaiclayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Modifica utente</span>
	</h2>
	@include('backend.hubbers.validationerrors')
	<br/><br/>
	{{ Form::model($hubber, array('route' => array('hubbers.update', $hubber->id), 'method' => 'PUT')) }}
	@include('backend.hubbers.form')
	{{ Form::submit('Aggiorna', array('class' => 'btn btn-primary btn-lg')) }}
	{{ Form::close() }}
</div>
@endsection