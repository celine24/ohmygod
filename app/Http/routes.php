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
	return View::make('index');
});

Route::resource('/api/pvs', 'PvController');
Route::resource('/api/groups', 'GroupController');
//Route::post('/api/v1/employees/{id}', 'Employees@update');
//Route::delete('/api/v1/employees/{id}', 'Employees@destroy');

//Route::resource('pvs', 'PvController');
//Route::resource('group', 'GroupController');
//Route::resource('relationship', 'RelationshipController');
//Route::resource('greek', 'GreekController');
//Route::resource('host', 'HostController');
//Route::resource('power', 'PowerController');

// API ROUTES ==================================
//Route::group(array('prefix' => 'api'), function() {
//
//	// since we will be using this just for CRUD, we won't need create and edit
//	// Angular will handle both of those forms
//	// this ensures that a user can't access api/create or api/edit when there's nothing there
//	Route::resource('pv', 'PvController',
//		array('only' => array('index', 'store', 'destroy')));
//
//});

// CATCH ALL ROUTE =============================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
//App::missing(function($exception) {
//	return View::make('index');
//});