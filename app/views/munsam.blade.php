@extends('layouts.fd')

@section('bheader')
	@include('bootstrap.header')
@stop

@section('content')
	@include('layouts.test.munsam')		
@stop

@section('footer')
	@include('includes.footer')
@stop

@section('bfooter')
	@include('bootstrap.footer')
@stop