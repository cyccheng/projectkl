<?php
	Route::get('/ajax/serv/{name}', function($name){
		return View::make('ajax.serv.'.$name);
	});
?>