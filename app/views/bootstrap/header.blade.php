<?php 
	global $DEBUG_MODE, $servJS, $servCSS, $servDEBUG;
	$servJS = new Serv\servJS();
	$servCSS = new Serv\servCSS();
	$servDEBUG = new Serv\servDEBUG();
	
	$servCSS->add('serv/servDEBUG.css');
?>