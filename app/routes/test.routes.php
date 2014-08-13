<?php
	Route::get('/fd', function(){
		return View::make('fdtest');
	});

	Route::get('/main', function(){
		return View::make('main');
	});

	Route::get('/', function()
	{
		return View::make('hello');
	});
?>