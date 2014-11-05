<div class="form-group">
	{{ Form::label('nomecorso', 'Nome del corso :') }}
	{{ Form::text('nomecorso', Input::old('nomecorso'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('tagline', 'Tagline :') }}
	{{ Form::text('tagline', Input::old('tagline'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('coursetype_id', 'Tipo di corso :') }}
	{{ Form::select('coursetype_id', $tipicorso,'', array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('programmabase', 'Programma di base :') }}
	{{ Form::textarea('programmabase', Input::old('programmabase'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('programmadettagliato', 'Programma dettagliato :') }}
	{{ Form::textarea('programmadettagliato', Input::old('programmadettagliato'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('teacher_id', 'Insegnante :') }}
	{{ Form::select('teacher_id', $insegnante, Input::old('teacher_id'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('minpartecipanti', 'Numero minimo partecipanti :') }}
	{{ Form::number('minpartecipanti', Input::old('minpartecipanti'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('maxpartecipanti', 'Numero massimo partecipanti :') }}
	{{ Form::number('maxpartecipanti', Input::old('maxpartecipanti'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('prezzo', 'Prezzo ( 0 - gratuito ) :') }}
	{{ Form::number('prezzo', Input::old('prezzo'), array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('corsoattivo', 'Corso attivo :') }}
	{{ Form::checkbox('corsoattivo', Input::old('corsoattivo'), array('class' => 'form-control')) }}
</div>
