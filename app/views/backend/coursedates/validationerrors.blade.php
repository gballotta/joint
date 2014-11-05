@if(Session::has('errors'))
<div class="alert alert-danger alert-dismissable">
	 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4>
		Attenzione
	</h4>
	<p>Ci sono errori nell'immissione :</p>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif