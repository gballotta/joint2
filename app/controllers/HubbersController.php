<?php

class HubbersController extends \BaseController {

	/**
	 * Display a listing of hubbers
	 *
	 * @return Response
	 */
	public function index()
	{
		$hubbers = '';
		if (Input::get('cognomericerca') == '*') {
			$hubbers = Hubber::orderBy('cognome', 'asc')->get();
			return View::make('backend.hubbers.index', compact('hubbers'))->with('cognomecercato', 'Tutti');
		} else {
			$hubbers = Hubber::where('cognome', '=', Input::get('cognomericerca'))->orderBy('nome', 'asc')->get();
			return View::make('backend.hubbers.index', compact('hubbers'))->with('cognomecercato', Input::get('cognomericerca'));
		}
	}

	/**
	 * Show the form for creating a new hubber
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.hubbers.create');
	}

	/**
	 * Store a newly created hubber in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Hubber::$validationRules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		Hubber::create($data);

		return Redirect::route('hubbers.create')->with('messaggio', 'Utente creato correttamente');
	}

	/**
	 * Display the specified hubber.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hubber = Hubber::findOrFail($id);

		return View::make('hubbers.show', compact('hubber'));
	}

	/**
	 * Show the form for editing the specified hubber.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hubber = Hubber::find($id);

		return View::make('backend.hubbers.edit', compact('hubber'));
	}

	/**
	 * Update the specified hubber in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$hubber = Hubber::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Hubber::$validationRules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$hubber->update($data);

		return Redirect::route('hubbers.index')->with('messaggio', 'Utente modificato');
	}

	/**
	 * Remove the specified hubber from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Hubber::destroy($id);

		return Redirect::route('hubbers.index')->with('messaggio', 'Utente eliminato');
	}

}
