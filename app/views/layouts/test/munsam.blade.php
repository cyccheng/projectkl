<?php 
global $servCSS;
$servCSS->add('profiletop.css');
$servCSS->add('profilecontent.css');
?>

<div class='row collapse'>
	<div class='columns large-12'>@include('layouts.test.munsam.space')</div>
</div>

<div class='row collapse'>
	<div class='columns large-9'>@include('layouts.test.munsam.user-info')</div>
	<div class='columns large-3'>@include('layouts.test.munsam.connection')</div>
</div>

<div class='row collapse'>
	<div class='columns large-4'>
		@include('layouts.test.munsam.space')<br />
		@include('layouts.test.munsam.feed')<br />
		@include('layouts.test.munsam.insta-pic')
	</div>
	<div class='columns large-8'>@include('layouts.test.munsam.item3')</div>
</div>
