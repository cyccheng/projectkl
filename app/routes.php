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

Route::get('/fd', function(){
	return View::make('fdtest');
});

Route::get('/', function()
{
	echo 'hello';
	return View::make('hello');
});
