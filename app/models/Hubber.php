<?php

class Hubber extends Eloquent {
	public static $rules = array('cognome' => 'required|max:24',
	                             'nome' => 'required|max:24',
								 'indirizzo' => 'required',
								 'cap' => 'max:5',
								 'provincia' => 'max:3',
								 'telefono' => 'max:16',
								 'email' => 'required|email');
}
