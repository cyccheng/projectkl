@extends('layouts.fd')

@section('bheader')
	@include('bootstrap.header')
@stop

@section('content')
	@include('layouts.test.login')		
@stop

@section('css')
	@include('includes.model.css')
@stop

@section('footer')
	@include('includes.footer')
@stop

@section('bfooter')
	@include('bootstrap.footer')
@stop