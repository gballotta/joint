<?php

class Teacher extends Eloquent {
	public static $rules = array('cognome' => 'required|max:32',
	                             'nome' => 'required|max:32');
}
