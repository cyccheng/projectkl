@extends('layouts.fd')

@section('bheader')
	<link href=''>
	hello
	@include('bootstrap.header')
@stop

@section('content')
	@include('layouts.test.kt')		
@stop

@section('footer')
	@include('includes.footer')
@stop

@section('bfooter')
	@include('bootstrap.footer')
@stop