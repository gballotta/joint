@extends('backendlayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Aggiungi un tipo di corso</span>
	</h2>
	@include('backend.coursetypes.validationerrors')
	<br/><br/>
	{{ Form::open(array('url' => 'coursetypes', 'method' => 'post')) }}
	@include('backend.coursetypes.form')
	{{ Form::submit('Crea', array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
</div>
@endsection