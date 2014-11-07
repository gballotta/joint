@extends('mosaiclayout')

@section('content')

<div class="container">

<h1 class="page-header text-primary">La nostra sala corsi / eventi<br/></h1>
<div class="row">
	<div class="col-md-8">
		<p class="text-justify">
			La sala corsi-meeting di Joint Hub è situata nel Centro Commerciale Valverde a Montecchio, quindi
			in una posizione molto facile da raggiungere e ben servita da parcheggi.<br/>
			L'ambiente, informale e luminoso, può essere configurato in diverse disposizioni per venire
			incontro a ogni esigenza di corso-meeting e ha una capienza massima di 20 persone.<br/>
			Sono naturalmente presenti tutte le attrezzature necessarie, dal proiettore ad una stampante
			multifunzione per preparare eventuale materiale.<br/>
			Per i corsi di informatica, inoltre, possono essere utilizzati fino a 10 PC configurati secondo
			le vostre esigenze.<br/>
			E' presente l'accesso a Internet via Wi-Fi, ed è possibile utilizzare la piccola area relax
			separata per offrire piccoli rinfreschi.
		</p>
	</div>
	<div class="col-md-4">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					{{HTML::image('/img/salacorsi/salacorsi_01.png')}}
					<div class="carousel-caption">
						...
					</div>
					</div>
				<div class="item">
					{{HTML::image('/img/salacorsi/salacorsi_02.png')}}
					<div class="carousel-caption">
						...
					</div>
				</div>
			</div>
			<!-- Controls -->
		</div>
	</div>
</div>
<br/><br/><br/>
<div class="row">
	<div class="col-md-6">
		<p class="text-danger">
			<b>L'uso della sala comprende :</b>
		</p>
		<ul>
			<li>Connessione Wi-Fi a Internet</li>
			<li>Videoproiettore</li>
			<li>Lavagna</li>
			<li>Sistema di registrazione audio/video</li>
			<li>Stampante multifunzione</li>
		</ul>
	</div>
	<div class="col-md-6">
		<p class="text-danger">
			<b>A richiesta possono essere forniti :</b>
		</p>
		<ul>
			<li>Computer desktop con dotazione software</li>
			<li>Preparazione e stampa materiale didattico/informativo</li>
			<li>Predisposizione presentazioni slides per proiezioni</li>
			<li>Catering per rinfresco</li>
		</ul>
	</div>
</div>
<br/><br/><br/>
<h3 class="text-primary text-center">Configurazioni della sala</h3>
<br/>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Aula</h3>
			</div>
			<div class="panel-body">
				{{ HTML::image('img/salacorsi/conf_scrivanie.png', 'configurazione scrivanie',
				array('class' => 'img-responsive'))}}
				<p class="text-center">
					<br>
					Scrivanie disposte ad aula scolastica. Con cattedra per insegnante<br><br>
					18 posti a sedere<br><br>
					Prese di corrente da soffitto per ogni postazione
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Meeting</h3>
			</div>
			<div class="panel-body">
				{{ HTML::image('img/salacorsi/conf_meeting.png', 'configurazione meeting',
				array('class' => 'img-responsive'))}}
				<p class="text-center">
					<br>
					Tavolo riunioni 560x160<br><br>
					13 posti a sedere<br><br>
					Prese di corrente da soffitto per ogni postazione
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Isole</h3>
			</div>
			<div class="panel-body">
				{{ HTML::image('img/salacorsi/conf_isole.png', 'configurazione isole',
				array('class' => 'img-responsive'))}}
				<p class="text-center">
					<br>
					Divisione in 2 grandi isole 320x160<br><br>
					Prese di corrente da soffitto per ogni isola<br><br>
					Ideale per corsi "manuali" come bricolage, decorazioni, pittura o altro
				</p>
			</div>
		</div>
	</div>
</div>
</div>
@endsection