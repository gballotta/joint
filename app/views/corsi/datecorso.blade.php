@extends('mosaiclayout')
@section('content')
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1 class="text-color">{{ $corso->nomecorso }}</h1>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<p>
				Le date di questo corso :
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>
							Nome Corso
						</th>
						<th>
							Data
						</th>
						<th>
							Luogo
						</th>
						<th>
							Note
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($datecorsi as $datacorso)
					<tr>
						<td>
							{{ $corso->nomecorso }}
						</td>
						<td>
							{{ $datacorso->data }}
						</td>
						<td>
							Sala Corsi Jointhub
						</td>
						<td>
							
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<a href="{{ $backurl }}">
			 <button type="button" class="btn btn-primary pull-right">Precedente</button>
			 </a>
		</div>
	</div>
</div>
@endsection