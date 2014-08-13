<?php 
	global $DEBUG_MODE, $servJS, $servCSS, $servDEBUG;
	$servJS = new servJS();
	$servCSS = new servCSS();
	$servDEBUG = new servDEBUG();
	
	$servCSS->add('serv/servDEBUG.css');
?>