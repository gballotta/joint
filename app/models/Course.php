<?php

class Course extends Eloquent {
	public static $rules = array('nomecorso' => 'required',
	                             'tagline' => 'required',
								 'programmabase' => 'required',
								 'programmadettagliato' => 'required',
								 'minpartecipanti' => 'integer|min:1',
								 'maxpartecipanti' => 'integer|min:1',
								 'prezzo' => 'integer|min:0');
	
	public function coursedates() {
		return $this->hasMany('Coursedate');
	}
}
