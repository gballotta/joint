@extends('mosaiclayout')
@section('content')
<div class="container">
	<h2 class="headline text-color">
		<span class="border-color">Modifica data corso</span>
	</h2>
	@include('backend.coursedates.validationerrors')
	<br/><br/>
	{{ Form::model($dataCorso, array('route' => array('coursedates.update', $dataCorso->id), 'method' => 'PUT')) }}
	@include('backend.coursedates.form')
	{{ Form::submit('Aggiorna', array('class' => 'btn btn-primary btn-lg')) }}
	{{ Form::close() }}
</div>
@endsection