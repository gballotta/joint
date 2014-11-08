<?php

class HubberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hubbers = Hubber::all();
		return View::make('backend.hubbers.index')->with('hubbers', $hubbers);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.hubbers.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator::make(Input::all(), Hubber::$rules);
		if($validation->fails()) {
			return Redirect::to('hubbers/create')->withInput()->withErrors($validation);
		} else {
			$utente = new Hubber;
			$utente->cognome = Input::get('cognome');
			$utente->nome = Input::get('nome');
			$utente->indirizzo = Input::get('indirizzo');
			$utente->cap = Input::get('cap');
			$utente->localita = Input::get('localita');
			$utente->provincia = Input::get('provincia');
			$utente->telefono = Input::get('telefono');
			$utente->email = Input::get('email');
			$utente->save();
			return Redirect::to('hubbers')->with('successo', 'Nuovo utente creato correttamente');
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
		$hubber = Hubber::find($id);
		return View::make('backend.hubbers.edit')->with('hubber', $hubber);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validation = Validator::make(Input::all(), Hubber::$rules);
		if($validation->fails()) {
			return Redirect::to('hubbers/create')->withInput()->withErrors($validation);
		} else {
			$utente = Hubber::find($id);
			$utente->cognome = Input::get('cognome');
			$utente->nome = Input::get('nome');
			$utente->indirizzo = Input::get('indirizzo');
			$utente->cap = Input::get('cap');
			$utente->localita = Input::get('localita');
			$utente->provincia = Input::get('provincia');
			$utente->telefono = Input::get('telefono');
			$utente->email = Input::get('email');
			$utente->save();
			return Redirect::to('hubbers')->with('successo', 'Utente modificato correttamente');
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
		$hubber = Hubber::find($id);
		$hubber->delete();
		return Redirect::to('hubbers')->with('successo', 'Utente eliminato');
	}


}
