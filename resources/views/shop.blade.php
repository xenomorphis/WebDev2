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
	
	#showcase {
		position: relative;
		width: 900px;
		padding-top: 68px;
		margin: auto;
		z-index: 1;
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
		<div id="showcase" class="carousel slide" data-ride="carousel" data-interval="5000">
  			<ol class="carousel-indicators">
   			<li data-target="#showcase" data-slide-to="0" class="active"></li>
    			<li data-target="#showcase" data-slide-to="1"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      			<img class="d-block w-100" src="/img/dummy1.jpg" alt="First slide">
    			</div>
    			<div class="carousel-item">
      			<img class="d-block w-100" src="/img/dummy2.jpg" alt="Second slide">
    			</div>
  			</div>
  			<a class="carousel-control-prev" href="#showcase" role="button" data-slide="prev">
   	 		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#showcase" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	@endif
@endsection

@section('maincontent')
	@if (Request::path() == 'artists')

		<p class="fulltext"> Page 2</p>
		
	@elseif (Request::path() == 'cabaret')
	
		<p class="fulltext"> Page 4</p>
	
	@elseif (Request::path() == 'concerts')
	
		<p class="fulltext"> Page 5</p>

	@elseif (Request::path() == 'locations')

		<p class="fulltext"> Page 3</p>

	@elseif (Request::path() == 'theatre')

		<p class="fulltext"> Page 6</p>
		
	@else
	
		<p class="fulltext"> Landing Page </p>
	
	@endif
@endsection