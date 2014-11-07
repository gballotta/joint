<?php

class Corsi extends \BaseController {
	public function index() {
		$listaCorsi = Course::orderBy('nomecorso')->get();
		Return View::make('corsi.programma')->with('corsi', $listaCorsi);
	}
	
	public function sala() {
		return View::make('corsi.spazio');
	}
	
	public function programmacorso($id) {
		$corso = Course::find($id);
		return View::make('corsi.scheda')->with('corso', $corso);
	}
	public function datecorsi($id) {
		$corso = Course::find($id);
		$datecorsi = Coursedate::where('data', '>=', new DateTime('today'))
		                         ->where('course_id', '=', $id)
		                         ->get();
		return View::make('corsi.datecorso')->with('corso', $corso)
		                                    ->with('datecorsi', $datecorsi)
											->with('backurl', '/programmacorsi');
	}
	public function calendario() {
		$datecorsi = Coursedate::with('course')
		                         ->where('data', '>=', new DateTime('today'))
		                         ->get();
		return View::make('corsi.calendario')->with('corsi', $datecorsi);
	}
}
	