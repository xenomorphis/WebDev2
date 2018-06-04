@extends('base')

@section('styles')
@guest
	.page-content {
		background-color: rgba(242,249,135,0);	
	}
@endguest
@auth
	.page-content {
		background-color: rgba(242,249,135,0.6);	
	}
@endauth
@endsection

@section('maincontent')
@guest
@endguest
@auth
@endauth
@endsection