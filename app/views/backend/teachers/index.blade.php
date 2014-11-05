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
		<span class="border-color">Insegnanti</span>
	</h2>
	
	<a href="{{ URL::to('teachers/create') }}">
		<button type="button" class="btn btn-primary btn-lg">Nuovo Insegnante</button>
	</a>
	<br/><br/>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Cognome</td>
				<td>Nome</td>
			</tr>
		</thead>
		<tbody>
			@foreach($insegnanti as $insegnante)
			<tr>
				<td>{{ $insegnante->cognome }}</td>
				<td>{{ $insegnante->nome }}</td>
				<td>
					<a class="btn btn-small btn-info" href="{{ URL::to('teachers/' . $insegnante->id . '/edit') }}">Modifica</a>
					{{ Form::open(array('url' => 'teachers/' . $insegnante->id, 'class' => 'pull-right')) }}
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