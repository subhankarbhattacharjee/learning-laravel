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

Route::group(array('prefix'=>'admin','namespace' => 'admin'),function() {
	Route::get('login', 'AuthController@getLogin');
	Route::post('login', array('as'=>'admin.auth.login','uses'=>'AuthController@postLogin'));
	Route::get('logout', array('as'=>'admin.auth.logout','uses'=>'AuthController@logout'));
});

Route::group(array('prefix'=>'admin','namespace' => 'admin','before' => 'auth'),function() {
	Route::resource('posts', 'PostsController',array('except' => array('show')));
});

