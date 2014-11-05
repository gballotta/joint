<?php

class CourseTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipicorsi = Coursetype::all();
		return View::make('backend.coursetypes.index')->with('corsi', $tipicorsi);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.coursetypes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), Coursetype::$rules);
		if($validation->fails()) {
			return Redirect::to('coursetypes/create')->withErrors($validation)->withInput();
		} else {
			$tipocorso = new Coursetype;
			$tipocorso->tipocorso = Input::get('tipocorso');
			$tipocorso->save();
			return Redirect::to('coursetypes')->with('successo', 'Nuovo tipo di corso creato');
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
		$corso = Coursetype::find($id);
		return View::make('backend.coursetypes.edit')->with('corso', $corso);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::all(), Coursetype::$rules);
		if($validation->fails()) {
			return Redirect::to('coursetypes/create')->withErrors($validation)->withInput();
		} else {
			$tipocorso = Coursetype::find($id);
			$tipocorso->tipocorso = Input::get('tipocorso');
			$tipocorso->save();
			return Redirect::to('coursetypes')->with('successo', 'Tipo di corso modificato');
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
		$corso = Coursetype::find($id);
		$corso->delete();
		return Redirect::to('coursetypes')->with('successo', 'Tipo di corso eliminato');
	}


}
