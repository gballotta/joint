<div class="form-group">
	{{ Form::label('cognome', 'Cognome :') }}
	{{ Form::text('cognome', Input::old('cognome'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('nome', 'Nome :') }}
	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
</div>