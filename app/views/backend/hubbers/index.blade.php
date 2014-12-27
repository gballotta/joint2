@extends('layouts.mosaic-back')

@section('content')

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
			<p style="display: none;">{{$hubber->email}}</p>
		</div>
		@endforeach
	</div>
</div>
{{Session::forget('cognomecercato')}}
@endif

@endsection()

@section('scripts')
<script>
$(".sfolda").hover(function() {
	$(this).find("p").slideDown(300);
}, function() {
	$(this).find("p").slideUp(300);
});

</script>

@endsection
