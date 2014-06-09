<?php

class PrescriptionsController extends \BaseController {

	/**
	 * Display a listing of prescriptions
	 *
	 * @return Response
	 */
	public function index()
	{
		$prescriptions = Prescription::all();

		return View::make('prescriptions.index', compact('prescriptions'));
	}

	/**
	 * Show the form for creating a new prescription
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('prescriptions.create');
	}

	/**
	 * Store a newly created prescription in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Prescription::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Prescription::create($data);

		return Redirect::route('prescriptions.index');
	}

	/**
	 * Display the specified prescription.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prescription = Prescription::findOrFail($id);

		return View::make('prescriptions.show', compact('prescription'));
	}

	/**
	 * Show the form for editing the specified prescription.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prescription = Prescription::find($id);

		return View::make('prescriptions.edit', compact('prescription'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$prescription = Prescription::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Prescription::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$prescription->update($data);

		return Redirect::route('prescriptions.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Prescription::destroy($id);

		return Redirect::route('prescriptions.index');
	}

}