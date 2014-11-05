<?php

class CourseDateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datecorsi = Coursedate::all();
		return View::make('backend.coursedates.index')->with('date', $datecorsi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$elencoCorsi = Course::lists('nomecorso', 'id');
		return View::make('backend.coursedates.create')->with('elencoCorsi', $elencoCorsi);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), Coursedate::$rules);
		if($validation->fails()) {
			return Redirect::to('coursedates/create')->withInput()->withErrors($validation);
		} else {
			$dataCorso = new Coursedate;
			$dataCorso->course_id = Input::get('course_id');
			$dataCorso->data = Input::get('data');
			$dataCorso->orainizio = Input::get('orainizio');
			$dataCorso->orafine = Input::get('orafine');
			$dataCorso->save();
			return Redirect::to('coursedates')->with('successo', 'Nuova data creata correttamente');
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
		$dataCorso = Coursedate::find($id);
		$elencoCorsi = Course::lists('nomecorso', 'id');
		return View::make('backend.coursedates.edit')->with('dataCorso', $dataCorso)
		                                             ->with('elencoCorsi', $elencoCorsi);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::all(), Coursedate::$rules);
		if($validation->fails()) {
			return Redirect::to('coursedates/create')->withInput()->withErrors($validation);
		} else {
			$dataCorso = Coursedate::find($id);
			$dataCorso->course_id = Input::get('course_id');
			$dataCorso->data = Input::get('data');
			$dataCorso->orainizio = Input::get('orainizio');
			$dataCorso->orafine = Input::get('orafine');
			$dataCorso->save();
			return Redirect::to('coursedates')->with('successo', 'Data modificata correttamente');
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
		$dataDaCancellare = Coursedate::find($id);
		$dataDaCancellare->delete();
		return Redirect::to('coursedates')->with('successo', 'Data corso eliminata');
	}


}
