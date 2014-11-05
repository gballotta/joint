<?php

class CourseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$corsi = Course::all();
		return View::make('backend.courses.index')->with('corsi', $corsi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipicorso = Coursetype::orderBy('tipocorso')->lists('tipocorso', 'id');
		$insegnante = Teacher::orderBy('cognome')->lists('cognome', 'id');
		return View::make('backend.courses.create')->with('tipicorso', $tipicorso)
												   ->with('insegnante', $insegnante);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), Course::$rules);
		if($validation->fails()) {
			return Redirect::to('courses/create')->withInput()->withErrors($validation);
		} else {
			$corso = new Course;
			$corso->nomecorso = Input::get('nomecorso');
			$corso->tagline = Input::get('tagline');
			$corso->coursetype_id = Input::get('coursetype_id');
			$corso->programmabase = Input::get('programmabase');
			$corso->programmadettagliato = Input::get('programmadettagliato');
			$corso->teacher_id = Input::get('teacher_id');
			$corso->minpartecipanti = Input::get('minpartecipanti');
			$corso->maxpartecipanti = Input::get('maxpartecipanti');
			$corso->prezzo = Input::get('prezzo');
			$corso->corsoattivo = Input::get('corsoattivo');
			$corso->save();
			return Redirect::to('courses')->with('successo', 'Creato nuovo corso');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$corso = Course::find($id);
		$tipicorso = Coursetype::orderBy('tipocorso')->lists('tipocorso', 'id');
		$insegnante = Teacher::orderBy('cognome')->lists('cognome', 'id');
		return View::make('backend.courses.edit')->with('corso', $corso)
		                                         ->with('tipicorso', $tipicorso)
												 ->with('insegnante', $insegnante);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::all(), Course::$rules);
		if($validation->fails()) {
			return Redirect::to('courses/create')->withInput()->withErrors($validation);
		} else {
			$corso = Course::find($id);
			$corso->nomecorso = Input::get('nomecorso');
			$corso->tagline = Input::get('tagline');
			$corso->coursetype_id = Input::get('coursetype_id');
			$corso->programmabase = Input::get('programmabase');
			$corso->programmadettagliato = Input::get('programmadettagliato');
			$corso->teacher_id = Input::get('teacher_id');
			$corso->minpartecipanti = Input::get('minpartecipanti');
			$corso->maxpartecipanti = Input::get('maxpartecipanti');
			$corso->prezzo = Input::get('prezzo');
			$corso->corsoattivo = Input::get('corsoattivo');
			$corso->save();
			return Redirect::to('courses')->with('successo', 'Corso modificato');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$corso = Course::find($id);
		$corso->delete();
		return Redirect::to('courses')->with('successo', 'Corso eliminato');
	}


}
