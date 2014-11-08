<div class="form-group">
	{{ Form::label('cognome', 'Cognome :') }}
	{{ Form::text('cognome', Input::old('cognome'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('nome', 'Nome :') }}
	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('luogonascita', 'Nato a :') }}
	{{ Form::text('luogonascita', Input::old('luogonascita'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('datanascita', 'Data di nascita :') }}
	{{ Form::text('datanascita', Input::old('datanascita'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('indirizzo', 'Indirizzo :') }}
	{{ Form::text('indirizzo', Input::old('indirizzo'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('cap', 'CAP :') }}
	{{ Form::text('cap', Input::old('cap'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('localita', 'Località :') }}
	{{ Form::text('localita', Input::old('localita'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('comune', 'Comune :') }}
	{{ Form::text('comune', Input::old('comune'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('provincia', 'Provincia :') }}
	{{ Form::text('provincia', Input::old('provincia'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Telefono :') }}
	{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'E-Mail :') }}
	{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('codicefiscale', 'Codice Fiscale :') }}
	{{ Form::text('codicefiscale', Input::old('codicefiscale'), array('class' => 'form-control')) }}
</div>