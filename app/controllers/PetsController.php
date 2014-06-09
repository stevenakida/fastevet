<?php

class PetsController extends \BaseController {

	/**
	 * Display a listing of pets
	 *
	 * @return Response
	 */
	public function index()
	{
		$pets = Pet::all();

		return View::make('pets.index', compact('pets'));
	}

	/**
	 * Show the form for creating a new pet
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pets.create');
	}

	/**
	 * Store a newly created pet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pet::create($data);

		return Redirect::route('pets.index');
	}

	/**
	 * Display the specified pet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet = Pet::findOrFail($id);

		return View::make('pets.show', compact('pet'));
	}

	/**
	 * Show the form for editing the specified pet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pet = Pet::find($id);

		return View::make('pets.edit', compact('pet'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pet = Pet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pet->update($data);

		return Redirect::route('pets.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pet::destroy($id);

		return Redirect::route('pets.index');
	}

}