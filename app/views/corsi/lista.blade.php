@foreach($corsi as $corso)

<div class="row clearfix">
	<div class="col-md-12 column">
		@if($corso->prezzo == 0)
		<div class="panel panel-green">
		@else
		<div class="panel panel-blue">
		@endif
			<div class="panel-heading">
				<h3>
					{{ $corso->nomecorso }}
				</h3><h4>{{ $corso->tagline }}</h4><br />
				<p>
				<span class="label label-warning">{{ $corso->coursetype->tipocorso }}</span>
				</p>
			</div>
			<div class="panel-body">
				{{ $corso->programmabase }}
			</div>
		</div>
		<a href="/corsi/{{ $corso->id }}">
		<button type="button" class="btn btn-green pull-right">Programma dettagliato</button>
		</a>
		<a href="/date/{{ $corso->id }}">
		<button type="button" class="btn btn-blue pull-right">Prossime date</button>
		</a>
	</div>
</div>
<br/><br/>

@endforeach