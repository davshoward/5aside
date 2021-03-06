<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PlayerController@summary');

Route::model('matches', 'App\Match');
Route::model('players', 'App\Player');
Route::model('teams', 'App\Team');

Route::resource('matches', 'MatchController');
Route::get('players/history', 'PlayerController@history');
Route::get('players/matrix', 'PlayerController@matrix');
Route::resource('players', 'PlayerController');
Route::resource('teams', 'TeamController');

Route::get('matches/create', 'AdminController@createMatch');
Route::post('matches', 'AdminController@storeMatch');

Route::get('data.json', 'DataController@json');
