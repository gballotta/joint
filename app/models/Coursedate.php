<?php

class Coursedate extends Eloquent {
	public static $rules = array('data' => 'required|date',
	                             'orainizio' => 'required',
								 'orafine' => 'required');
	
	public function course() {
		return $this->belongsTo('Course');
	}
}
