<?php
Route::get('/', function()
{
	return View::make('layouts.hello');
});
Route::resource('pets', 'PetsController');
Route::resource('prescriptions', 'PrescriptionsController');
Route::resource('Appointments', 'AppointmentsController');
Route::resource('drugs', 'DrugsController');
Route::resource('furmigations', 'FurmigationsController');