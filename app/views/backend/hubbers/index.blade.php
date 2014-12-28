@extends('layouts.mosaic-back')

@section('content')

@if(Session::has('messaggio'))

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success">
			<b>{{Session::get('messaggio')}}</b>
		</div>
	</div>
</div>

@endif

<div class="row">
	<div class="col-md-12">
		<h4>Inserire un cognome per cominciare la ricerca o usare "*" per tutti :</h4>
		{{ Form::open(array('url' => '/hubbers', 'method' => 'GET', 'class' => 'form-inline')) }}
		
		<div class="form-group">
			{{ Form::text('cognomericerca', '', array('class' => 'form-control',
														  'placeholder' => 'Cognome da ricercare')) }}
		</div>
		{{ Form::submit('Cerca', array('class' => 'btn btn-primary')) }}
		
		{{ Form::close() }}
	</div>
</div>

@if(isset($cognomecercato))
<div class="row">
	<div class="col-md-12">
		<h2 class="headline text-color">
			<span class="border-color">Risultati ricerca per : {{$cognomecercato}}</span>
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		@foreach($hubbers as $hubber)
		<div class="alert alert-info sfolda">
			<h4>{{$hubber->cognome}} {{$hubber->nome}}</h4>
			<div class="container-fluid" style="display: none">
				{{ Form::open(array('url' => 'hubbers/' . $hubber->id, 'class' => 'form-inline pull-right')) }}
				{{ Form::hidden('_method', 'DELETE') }}
				{{ Form::submit('Elimina', array('class' => 'btn btn-red')) }}				
				{{ Form::close() }}
				<a href="#" class="btn btn-blue viz" data-toggle="{{$hubber->id}}">Visualizza</a>
				<a href="hubbers/{{$hubber->id}}/edit" class="btn btn-orange">Modifica</a>
			</div>
			<br/>
			<div id="anag{{$hubber->id}}" class="panel panel-green" style="display: none">
				<div class="panel-heading">
					<h3 class="panel-title">Dati anagrafici</h3>
				</div>
				<div class="panel-body">
					<p>Indirizzo : <strong>{{$hubber->indirizzo}}</strong></p>
					<p>Località : <strong>{{$hubber->localita}}</strong></p>
					<p>CAP : <strong>{{$hubber->cap}}</strong> Provincia : <strong>{{$hubber->provincia}}</strong></p>
					<p>Telefono : <strong>{{$hubber->telefono}}</strong></p>
					<p>Indirizzo E-Mail : <strong>{{$hubber->email}}</strong></p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
{{Session::forget('cognomecercato')}}
@endif

@endsection()

@section('scripts')
<script>

$(document).ready(function() {
	$(".sfolda").hover(function() {
		$(this).find("div.container-fluid").slideDown(300);
	}, function() {
		$(this).find("div.container-fluid").slideUp(300);
	});
});

$(document).ready(function() {
	$(".viz").click(function(e) {
		e.preventDefault();
		var iddi = $(this).attr('data-toggle');
		$("#anag"+iddi).slideToggle(200);
	});
});

</script>

@endsection
