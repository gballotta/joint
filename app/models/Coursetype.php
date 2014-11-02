<?php

class Coursetype extends Eloquent {
	public static $rules = array('tipocorso' => 'required|max:32');
}
