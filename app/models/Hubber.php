<?php

class Hubber extends \Eloquent {
	
	protected $fillable = array('nome',
								'cognome',
								'indirizzo',
								'cap',
								'localita',
								'provincia',
								'telefono',
								'email');
	
	public static $validationRules = array('nome' => 'required|max:32',
										   'cognome' => 'required|max:32',
										   'indirizzo' => 'required|max:64',
										   'cap' => 'max:5',
										   'localita' => 'required|max:64',
										   'provincia' => 'max:2',
										   'telefono' => 'max:16',
										   'email' => 'email|max:64');
}