@extends('mosaiclayout')

@section('content')

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1 class='text-color'>{{$corso->nomecorso}}</h1>
			<h3>{{$corso->tagline}}</h3>
			<br>
			<p>
				<span class="label label-info">
				{{ $corso->coursetype->tipocorso }}
				</span>
			</p><br>
			<p>Numero minimo partecipanti : {{ $corso->minpartecipanti }}</p>
			<p>Numero massimo partecipanti : {{ $corso->maxpartecipanti }}</p>
			<p>
				@if($corso->prezzo == 0)
				Evento gratuito
				@else
				Costo iscrizione : {{ $corso->prezzo }} Euro
				@endif
			</p>
			<br>
			<p>Docente : {{ $corso->teacher->cognome }} {{ $corso->teacher->nome }}</p>
			<br>
			<a class="btn btn-lg btn-blue" href="#">Prenota ora</a>
			<br><br>
			<h2 class="headline text-color">
				<span class="border-color">Descrizione</span>
			</h2>
			<p class="text-justify">{{ $corso->programmabase }}</p>
			<br><br>
			<h2 class="headline text-color">
				<span class="border-color">Programma</span>
			</h2>
			<p class="text-justify">{{ $corso->programmadettagliato }}</p>
		</div>
	</div>
</div>

@endsection