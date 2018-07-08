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
	
	.spacer {
		padding-top: 150px;	
	}
	
	#page-search > label {
		font-size: 24px;
		color: #f7f107;
		text-shadow: 1px 1px #777;
	}
	
	#showcase {
		position: relative;
		width: 840px;
		padding-top: 118px;
		margin: auto;
		z-index: 1;
	}
	
	#showcase-frame {
		position: absolute;
		width: 1020px;
		margin-bottom: 80px;
		margin-left: 45px;
		top: 240px;
		z-index: 2;
	}
@endsection

@section('eyecatcher')
	@if (Request::path() == 'artists' || Request::path() == 'cabaret' || Request::path() == 'concerts' || Request::path() == 'locations' || Request::path() == 'theatre')
		<div class="fulltext">	
			<form id="page-search" method="get" action="{{ route('search') }}" target="_blank">
				<label for="search-field" class="highlight-text search-gui">Finde dein Event:</label>
				<input id="search-field" class="col-md-8 search-gui" type="text" name="phrase" required>
				<button type="submit" class="btn-md btn-primary search-gui">SUCHEN</button>
			</form>
		</div>
		<hr/>
	@else
		<img id="showcase-frame" src="/img/sc_frame.png">
		<div id="showcase" class="carousel slide" data-ride="carousel" data-interval="8000">
  			<ol class="carousel-indicators">
   			<li data-target="#showcase" data-slide-to="0" class="active"></li>
    			<li data-target="#showcase" data-slide-to="1"></li>
    			<li data-target="#showcase" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      			<img class="d-block w-100" src="/img/showcase1.jpg">
    			</div>
    			<div class="carousel-item">
      			<img class="d-block w-100" src="/img/showcase2.jpg">
    			</div>
    			<div class="carousel-item">
      			<img class="d-block w-100" src="/img/showcase3.jpg">
    			</div>
  			</div>
		</div>
	@endif
@endsection

@section('maincontent')

	@if (Request::path() == 'artists')

		<!-- <p class="fulltext"> Page 2</p> -->
    <table class="fulltext">
        <tr>
            <th>Name</th>
            <th>Genre</th>
        </tr>
        @foreach($artists as $artist)
        <tr>
            <td><a href="/artists/{{$artist->id}}">{{$artist->name}}</a></td> <!-- WICHTIG!!! -->
            <td><a href="/artists/{{$artist->id}}">{{$artist->genre}}</a></td>    
        </tr>
         @endforeach
    </table>
    <p class="fulltext">Admin:</p>
    <button type="button" class="btn-md btn-primary search-gui"><a href="/artists/create">KÜNSTLER hinzufügen</a></button> <!-- create()-Funktion wird aufgerufen! -->
		
	@elseif (Request::path() == 'cabaret')
	
		<p class="fulltext"> Page 4</p>
	
	@elseif (Request::path() == 'concerts')
	
		<!-- <p class="fulltext"> Page 5</p> -->
    <table class="fulltext">
        <tr>
            <th>Name</th>
            <th>Beschreibung</th>
        </tr>
        @foreach($concerts as $concert)
        <tr>         
            <td><a href="concerts/{{$concert->id}}">{{$concert->name}}</a></td>
            <td><a href="concerts/{{$concert->id}}">{{$concert->description}}</a></td>     
        </tr>
         @endforeach
    </table>

	@elseif (Request::path() == 'locations')

		<!-- <p class="fulltext"> Page 3</p> -->
    <table class="fulltext">
        <tr>
            <th>Name</th>
            <th>Ort</th>
        </tr>
        @foreach($locations as $location)
        <tr>         
                <td><a href="locations/{{$location->id}}">{{$location->name}}</a></td>
                <td><a href="locations/{{$location->id}}">{{$location->place}}</a></td>  
        </tr>
         @endforeach
    </table>

	@elseif (Request::path() == 'theatre')

		<p class="fulltext"> Page 6</p>
		
	@else
	   @foreach($artists as $artist)     
<p class="fulltext spacer"> <b>{{$artist->name}}</b> ist ein sehr bekannter Künstler und macht <b>{{$artist->genre}}</b> Musik. Er ist seit Jahren die Nummer 1 und weiß sich auf der Bühne zu präsentieren. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><a href="/"><b>-> zu {{$artist->name}} Konzerten</b></a></p>
            
        @endforeach
	@endif
@endsection