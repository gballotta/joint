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
		<span class="border-color">Date corsi</span>
	</h2>
	
	<a href="{{ URL::to('coursedates/create') }}">
		<button type="button" class="btn btn-primary btn-lg">Crea una nuova data</button>
	</a>
	<br/><br/>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>Data</td>
				<td>Ora</td>
				<td>Nome corso</td>
			</tr>
		</thead>
		<tbody>
			@foreach($date as $data)
			<tr>
				<td>{{ $data->data }}</td>
				<td>{{ $data->orainizio }}</td>
				<td>{{ $data->course->nomecorso }}</td>
				<td>
					<a class="btn btn-primary" href="{{ URL::to('coursedates/' . $data->id . '/edit') }}">Modifica</a>
					{{ Form::open(array('url' => 'coursedates/' . $data->id, 'class' => 'pull-right')) }}
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