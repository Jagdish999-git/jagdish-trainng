<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BabaArt</title>
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js"></script>
    <script src="https://fullcalendar.io/assets/demo-to-codepen.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

	
<style>
    * {
		font-family: montserrat;
		}
		video {
			position: absolute;
			top: 50%;
			left: 50%;
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			z-index: 0;
			transform: translateX(-50%) translateY(-50%);
		}
		.navbar-nav a {
			font-size: 15px;
			text-transform: uppercase;
			font-weight: 500;
		}
		.navbar-light .navbar-brand {
			color: #000;
			font-size: 25px;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 2px;
		}
		.navbar-light .navbar-brand span {
			color: #1977cc;
		}
		.w-100 {
			height: 100vh;
		}
		.navbar-toggler {
			padding: 1px 5px;
			font-size: 18px;
			line-height: .3;
			background: #fff;
		}
		.navbar .appbtn {
			background: #1977cc;
			margin-left: 30px;
			border-radius: 4px;
			font-weight: 400;
			color: #fff;
			text-decoration: none;
			padding: 0.5rem 1rem;
			line-height: 2.3;
		}
		.carousel-item {
			height: 100vh;
			min-height: 300px;
		}
		.carousel-caption {
			bottom: 220px;
			z-index: 2;
		}
		.carousel-caption h5 {
			font-size: 45px;
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-top: 25px;
		}
		.carousel-caption p {
			width: 60%;
			margin: auto;
			font-size: 18px;
			line-height: 1.8;
		}
		.carousel-caption a {
			text-transform: uppercase;
			text-decoration: none;
			background: #1977cc;
			padding: 5px 20px;
			display: inline-block;
			color: #fff;
			margin-top: 15px;
			border-radius: 5px;
		}
		.carousel-inner:before {
			content: '';
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.4);
			z-index: 1;
		}
		@media only screen and (max-width: 767px) {
			.navbar-nav {
				text-align: center
			}
			.carousel-caption {
				bottom: 165px
			}
			.carousel-caption h5 {
				font-size: 16px
			}
			.carousel-caption a {
				padding: 10px 15px;
				font-size: 14px
			}
			.navbar .appbtn {
				display: none;
			}
		}



  
        
  </style>
  <!-- Nucleo Icons -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
  <style>
    .error{
     color: #FF0000; 
    }

body {
    background-position: center;
 
    background-repeat: no-repeat;
    background-size: cover;
    color: #505050;
    font-family: "Rubik",Helvetica,Arial,sans-serif;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.5;
    text-transform: none;
}
.forgot{
	    background-color: #fff;
    padding: 12px;
    border: 1px solid #dfdfdf;
}
.padding-bottom-3x {
    padding-bottom: 72px !important;
}
.card-footer{
	background-color: #fff;
}
.btn{ 

	font-size: 13px;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #76b7e9;
    outline: 0;
    box-shadow: 0 0 0 0px #28a745;
}
    </style>
</head>
<body>
    <div id="app">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<a class="navbar-brand" href="{{url('home')}}"><span>BABA</span>A<span style="color:orange">r</span>t</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item ">
							<a id="navbarDropdown" class="nav-link " href="{{url('home')}}"  aria-haspopup="true" aria-expanded="false" v-pre>
								H<span style="color:orange">O</span>ME

							</a>
							
						</li>
						<li class="nav-item ">
							<a id="navbarDropdown" class="nav-link " href="{{url('userdata-home')}}"  aria-haspopup="true" aria-expanded="false" v-pre>
								UserData
							</a>
						</li>
						<li class="nav-item ">
							<a id="navbarDropdown" class="nav-link " href="{{url('product.products')}}"  aria-haspopup="true" aria-expanded="false" v-pre>
								Product
							</a>
						</li>
					<li class="nav-item ">
							<a id="navbarDropdown" class="nav-link " href="{{url('profile')}}"  aria-haspopup="true" aria-expanded="false" v-pre>
								Profile
							</a>
						</li>
				<ul class="navbar-nav me-auto">
					</ul>
					<ul class="navbar-nav ms-auto">
						@guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
					@php
					$adminData = Auth::user();
					@endphp
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <img src="{{asset('images/'.$adminData->image)}} "
							width="30" height="30" style="border-radius: 50%">
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							
								<a class="dropdown-item" href="{{url('calendar')}}">Calendar</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
