@extends('layouts.mosaic-back')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2 class="headline text-color">
			<span class="border-color">Creazione nuovo utente</span>
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
		{{ Form::open(array('url' => '/hubbers', 'method' => 'POST')) }}
		
		@include('backend.hubbers.form')
		
		{{ Form::close() }}
	</div>
</div>

@endsection()
