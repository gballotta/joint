<?php

class TeacherController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$insegnanti = Teacher::all();
		
		return View::make('backend.teachers.index')->with('insegnanti', $insegnanti);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.teachers.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), Teacher::$rules);
		if($validation->fails()) {
			return Redirect::to('teachers/create')->withInput()->withErrors($validation);
		} else {
			$insegnante = new Teacher;
			$insegnante->cognome = Input::get('cognome');
			$insegnante->nome = Input::get('nome');
			$insegnante->save();
			return Redirect::to('teachers')->with('successo', 'Nuovo insegnante creato');
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
		$teacher = Teacher::find($id);
		return View::make('backend.teachers.edit')->with('teacher', $teacher);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::all(), Teacher::$rules);
		if($validation->fails()) {
			return Redirect::to('teachers/' . $id . '/edit')->withErrors($validation)->withInput();
		} else {
			$teacher = Teacher::find($id);
			$teacher->cognome = Input::get('cognome');
			$teacher->nome = Input::get('nome');
			$teacher->save();
			return Redirect::to('teachers')->with('successo', 'Insegnante modificato');	
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
		$teacher = Teacher::find($id);
		$teacher->delete();
		return Redirect::to('teachers')->with('successo', 'Insegnante eliminato');	
	}


}
