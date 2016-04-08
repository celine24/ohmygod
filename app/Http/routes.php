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
	return View::make('hello');
});



Route::get('/', 'PvController@index');

Route::resource('pv', 'PvController');
Route::resource('group', 'GroupController');
Route::resource('relationship', 'RelationshipController');
Route::resource('greek', 'GreekController');
Route::resource('host', 'HostController');
Route::resource('power', 'PowerController');
