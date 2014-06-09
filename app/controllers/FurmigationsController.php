<?php

class FurmigationsController extends \BaseController {

	/**
	 * Display a listing of furmigations
	 *
	 * @return Response
	 */
	public function index()
	{
		$furmigations = Furmigation::all();

		return View::make('furmigations.index', compact('furmigations'));
	}

	/**
	 * Show the form for creating a new furmigation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('furmigations.create');
	}

	/**
	 * Store a newly created furmigation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Furmigation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Furmigation::create($data);

		return Redirect::route('furmigations.index');
	}

	/**
	 * Display the specified furmigation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$furmigation = Furmigation::findOrFail($id);

		return View::make('furmigations.show', compact('furmigation'));
	}

	/**
	 * Show the form for editing the specified furmigation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$furmigation = Furmigation::find($id);

		return View::make('furmigations.edit', compact('furmigation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$furmigation = Furmigation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Furmigation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$furmigation->update($data);

		return Redirect::route('furmigations.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Furmigation::destroy($id);

		return Redirect::route('furmigations.index');
	}

}