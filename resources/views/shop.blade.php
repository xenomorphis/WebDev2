@extends('base')

@section('eyecatcher')

@endsection

@section('maincontent')
	@if (Request::path() == 'artists')

		<p> Page 2</p>

	@elseif (Request::path() == 'locations')

		<p> Page 3</p>

	@else
	
		<!-- Content der Landing Page
	
	@endif
@endsection