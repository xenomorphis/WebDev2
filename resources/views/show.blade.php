@extends('base')

@section('styles')
    h2 {
        
    }
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

@section('maincontent')
    <h2>{{ $artist->name }}</h2>
    <h5>Genre: {{ $artist->genre }}</h5>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy <b>{{ $artist->name }}</b> eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <b>{{ $artist->genre }}</b>. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>

    <button type="submit" class="btn-md btn-primary search-gui">RESERVIEREN</button>
    <!-- über IDs erreichbar z.B. http://127.0.0.1:8000/songs/3 -->
@endsection