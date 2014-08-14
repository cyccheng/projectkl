<?php
	Route::get('/munsam', function(){
		return View::make('munsam');
	});
	
	Route::get('/login', function(){
		return View::make('login');
	});
?>
