@extends('layouts.fd')

@section('bheader')
	@include('bootstrap.header')
@stop

@section('content')
	<a class='ads' data-aid=1 href='www.google.com'>Ads URL here</a>
	<?php
		global $servJS;
		$servJS->addLib('serv/ads.js');
		$servJS->addJS("\$('a.ads').servAds() ");
	?>
@stop

@section('footer')
	@include('includes.footer')
@stop

@section('bfooter')
	@include('bootstrap.footer')
@stop