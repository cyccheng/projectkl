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

#by KT, dynamically load files in app/routes/ that end with routes.php
$new_route_path = __DIR__ .'/routes/';
$o = scandir($new_route_path);
foreach($o as $route)
	if (substr($route, -10) == 'routes.php') include_once $new_route_path.$route;
