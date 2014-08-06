<?php
	Route::get('/fd', function(){
		return View::make('fdtest');
	});

	Route::get('/main', function(){
		return View::make('main');
	});

	Route::get('/', function()
	{
		echo 'hello';
		return View::make('hello');
	});
?>