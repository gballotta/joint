@extends('backendlayout')
@section('content')
<div class="container">
	@if(Session::has('successo'))
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4>
			{{ Session::get('successo') }}
		</h4>
	</div>
	@endif
	<h2 class="headline text-color">
		<span class="border-color">Corsi</span>
	</h2>
	
	<a href="{{ URL::to('courses/create') }}">
		<button type="button" class="btn btn-primary btn-lg">Nuovo Corso</button>
	</a>
	<br/><br/>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Nome corso</td>
				<td>Tagline</td>
			</tr>
		</thead>
		<tbody>
			@foreach($corsi as $corso)
			<tr>
				<td>{{ $corso->nomecorso }}</td>
				<td>{{ $corso->tagline }}</td>
				<td>
					<a class="btn btn-primary" href="{{ URL::to('courses/' . $corso->id . '/edit') }}">Modifica</a>
					{{ Form::open(array('url' => 'courses/' . $corso->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Elimina', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</div>
@endsection