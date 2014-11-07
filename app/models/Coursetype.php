<?php

class Coursetype extends Eloquent {
	public static $rules = array('tipocorso' => 'required|max:32');
	
	public function courses() {
		return $this->hasMany('Course');
	}
}
