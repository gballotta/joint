<?php

class Cowoprice extends Eloquent {
	public static $rules = array('nomepiano' => 'required|max:12',
	                             'descrizione1' => 'required|max:64',
								 'descrizione2' => 'required|max:64',
								 'descrizione3' => 'required|max:64',
								 'descrizione4' => 'required|max:64',
								 'prezzomensile' => 'integer|min:0');
}
