<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.hello');
});
Route::resource('pets', 'PetsController');
Route::resource('prescriptions', 'PrescriptionsController');
Route::resource('Appointments', 'AppointmentsController');
Route::resource('drugs', 'DrugsController');
Route::resource('furmigations', 'FurmigationsController');