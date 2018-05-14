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

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
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
              			<a class="nav-link" href="https://laravel.com/docs">Documentation</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="https://laravel-news.com">News</a>
        		    	</li>
            		<li class="nav-item">
              			<a class="nav-link" href="https://github.com/laravel/laravel">GitHub</a>
            		</li>
          		</ul>
        			</div>
      		</div>
    	  </nav>	  		
    	  </div>
    	  
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md highlight-text">
                    Laravel
                </div>
            </div>
        </div>
    </body>
</html>
