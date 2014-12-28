<div class="form-group">
	{{ Form::label('cognome', 'Cognome :') }}
	{{ Form::text('cognome', Input::old('cognome'), array('class' => 'form-control',
												  'placeholder' => 'Cognome')) }}
</div>
<div class="form-group">
	{{ Form::label('nome', 'Nome :') }}
	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control',
												  'placeholder' => 'Nome')) }}
</div>
<div class="form-group">
	{{ Form::label('indirizzo', 'Indirizzo :') }}
	{{ Form::text('indirizzo', Input::old('indirizzo'), array('class' => 'form-control',
												  'placeholder' => 'Indirizzo e numero civico')) }}
</div>
<div class="form-group">
	{{ Form::label('localita', 'Località :') }}
	{{ Form::text('localita', Input::old('localita'), array('class' => 'form-control',
												  'placeholder' => 'Località')) }}
</div>
<div class="form-group">
	{{ Form::label('cap', 'CAP : (Facoltativo)') }}
	{{ Form::text('cap', Input::old('cap'), array('class' => 'form-control',
										  		'placeholder' => 'Codice Avviamento Postale')) }}	
</div>
<div class="form-group">
	{{ Form::label('provincia', 'Provincia : (Facoltativo)') }}
	{{ Form::text('provincia', Input::old('provincia'), array('class' => 'form-control',
												  'placeholder' => 'Provincia (es. PU)')) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Telefono : (Facoltativo)') }}
	{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control',
												  'placeholder' => 'Telefono forma xxxx/xxxxxxx')) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Indirizzo E-Mail (Facoltativo)') }}
	{{ Form::text('email', Input::old('email'), array('class' => 'form-control',
												  'placeholder' => 'Indirizzo e-mail')) }}
</div>
{{ Form::submit('Invia', array('class' => 'btn btn-primary')) }}