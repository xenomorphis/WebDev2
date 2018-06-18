@extends('base')

@section('eyecatcher')

@endsection

@section('maincontent')
	@if (Request::path() == 'artists')

		<p> Page 2</p>
		
	@elseif (Request::path() == 'cabaret')
	
		<p> Page 4</p>
	
	@elseif (Request::path() == 'concerts')
	
		<p> Page 5</p>

	@elseif (Request::path() == 'locations')

		<p> Page 3</p>

	@elseif (Request::path() == 'theatre')

		<p> Page 6</p>
		
	@else
	
		<p> Landing Page </p>
	
	@endif
@endsection