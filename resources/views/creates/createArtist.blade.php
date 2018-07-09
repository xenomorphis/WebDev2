@extends('base')

@section('styles')
    h2 {
      padding-bottom: 25px; 
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
	<div class="fulltext">
     <h2 class="highlight-text">Künstler hinzufügen</h2>
        <form method="post" action="/artists">
            {{ csrf_field() }}
            <p>
                <label class="search-gui" for="name">Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}">
            </p>
            
            <p>
                <label class="search-gui" for="genre">Genre</label>
                <input type="text" name="genre" id="genre" value="{{old('genre')}}">
            </p>
            
            <p>
                <input class="btn-primary" type="submit" value="Hinzufügen">
            </p>
        </form>

        @if(count($errors))
            <hr>

            <div class="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   </div>
@endsection