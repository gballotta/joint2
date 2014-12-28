@extends('layouts.mosaic-back')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2 class="headline text-color">
			<span class="border-color">Modifica utente {{$hubber->cognome}} {{$hubber->nome}}</span>
		</h2>
	</div>
</div>

@if(Session::has('errors'))

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger">
			<b>Trovati errori nell'immissione : </b>
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach()
			</ul>
		</div>
	</div>
</div>

@endif

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
	<div class="col-md-6 col-md-offset-3">
		{{ Form::model($hubber, array('route' => array('hubbers.update', $hubber->id), 'method' => 'PUT')) }}
		
		@include('backend.hubbers.form')
		
		{{ Form::close() }}
	</div>
</div>

@endsection()
