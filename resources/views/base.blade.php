<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spotlight Events - Start</title>

        <!-- Stylesheets -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/fonts.css" rel="stylesheet" type="text/css">
        <link href="/css/basic.css" rel="stylesheet" type="text/css">
        
        <script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="/js/basic.js" type="text/javascript"></script>

        <!-- Styles -->
        <style>
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            @yield('styles')
        </style>
    </head>
    <body>
    	  <div class="top-nav">
    	  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      		<div class="container">
        			<img id="nav-logo" src="/img/_logoS.png" alt="Spotlight Events">
        			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          		 	<span class="navbar-toggler-icon"></span>
        			</button>
        			<div class="collapse navbar-collapse" id="navbarResponsive">
          		<ul class="navbar-nav ml-auto">
            		<li class="nav-item">
              			<a class="nav-link" href="/">New Stuff</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="https://laravel-news.com">Artists</a>
        		    	</li>
            		<li class="nav-item">
              			<a class="nav-link" href="https://github.com/laravel/laravel">Location</a>
            		</li>
          		</ul>
        			</div>
      		</div>
    	  </nav>	  		
    	  </div>
    	  
        <div class="flex-center position-ref full-height">
				<div class="container full-height page-content">
            	<div class="content">
            		@yield('eyecatcher')
               	@yield('maincontent')
               	@yield('sidebar')
            	</div>
       		</div>
        </div>
        
        <footer>
            <p> &copy;2018 SpotLight, NAC</p> <p> |</p>
            @guest
            <p> <a href="/login">Login</a> </p>
            @endguest
				@auth
				<p> <a href="#">Logout</a> </p>
				@endauth            
            <p> |</p> <p> <a href="/impressum">Impressum</a> </p> <p> |</p> <p> <a href="/disclaimer">Datenschutzerklärung</a> </p>
        </footer>
    </body>
</html>
