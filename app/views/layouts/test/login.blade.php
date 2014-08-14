<?php 
global $servCSS;
$servCSS->add('loginpage.css');
?>
<div class='row collapse'>
	<div class='columns large-12'>@include('layouts.test.munsam.space')</div>
</div>

<div class='row collapse'>
	<div class='columns large-8'>@include('layouts.test.munsam.login-msg')</div>
	<div class='columns large-4'>
		@include('layouts.test.munsam.login-form')<br />
		@include('layouts.test.munsam.login-signup')
	</div>
</div>