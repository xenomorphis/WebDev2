@extends('base')

@section('styles')
	hr {
		color: #f1f707;
		background-color: #f1f707;
		height: 2px;
	}
	
	.btn-primary {
		background-color: rgb(242,249,135);
		border-color: rgb(217,224,120);
		border-radius: 5px;
		color: rgb(46,42,136);
		font-family: 'Source Sans Pro';
	}
	
	.fulltext {
		padding-top: 40px;	
	}
	
	.search-gui {
		margin-right: 20px;	
	}
	
	#page-search > label {
		font-size: 24px;
		color: #f7f107;
		text-shadow: 1px 1px #777;
	}
@endsection

@section('eyecatcher')
	@if (Request::path() == 'artists' || Request::path() == 'cabaret' || Request::path() == 'concerts' || Request::path() == 'locations' || Request::path() == 'theatre')
		<div class="fulltext">	
			<form id="page-search" method="GET" action="">
				<label for="search-field" class="highlight-text search-gui">Finde dein Event:</label>
				<input id="search-field" class="col-md-8 search-gui" type="text" name="phrase" required>
				<button type="submit" class="btn-md btn-primary search-gui">SUCHEN</button>
			</form>
		</div>
		<hr/>
	@else
	
	@endif
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