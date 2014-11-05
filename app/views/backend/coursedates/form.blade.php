<div class="form-group">
	{{ Form::label('course_id', 'Corso :') }}
	{{ Form::select('course_id', $elencoCorsi, Input::old('course_id'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('data', 'Data :') }}
	{{ Form::text('data', Input::old('data'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('orainizio', 'Ora di inizio :') }}
	{{ Form::text('orainizio', Input::old('orainizio'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('orafine', 'Ora di fine :') }}
	{{ Form::text('orafine', Input::old('orafine'), array('class' => 'form-control')) }}
</div>