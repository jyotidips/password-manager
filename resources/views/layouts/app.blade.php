<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>PassIt</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">



	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
	</script>
	<style>
		.bg {

			height: 100 %;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.searchInputContainer {
			position: relative;
		}

		div {
			display: block;
		}

		div .searchWrapper .menuButtonLeft .menuButtonLeft {
			line-height: 44 px;
		}

		div# header .absolute .top .headerBar .right .headerBar {
			color: #FFFFFF;
		}

		input,
		textarea,
		button {
			font-family: 'Open Sans', sans-serif;
			font-size: 16 px;
		}

		#vaultSearch {
			height: 44px;
			padding-top: 0;
			padding-bottom: 0;
			vertical-align: top;
			border: none;
			font-size: 18 px;
			width: 100%;
		}



		.minw {
			min-width: 200 px;
		}

		.inputLight {
			color: #FFFFFF;
			background-color: RGBA(255, 255, 255, 0.2);
		}
	</style>



</head>

<body>
	<nav class="nav navbar navbar-expand-lg navbar-dark bg-danger">
		<div class=" navbar-header">
			<a class="navbar-brand" href="{{ url('/') }}" style="font-size:35px;">
				PassIt
			</a>
		</div>

		<div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="navbarNavDropdown"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<ul class="nav navbar-nav">
				&nbsp; @if(Auth::check())
				<form  action="{{ route('post.search') }}" method="post">
					{{ csrf_field() }}
					<ul class="searchWrapper menuButtonLeft" style="padding-top:5px;padding-right:10px; min-width:400px;">
					<div class="searchInputContainer">
						<input type="text" id="vaultSearch" class="searchInput inputLight" autocomplete="off" placeholder="&nbsp Search Your Vault"spellcheck="false" name="post_search">
						<button class="btn form-control-sm" style="background-color:#dc3545; font-size:15px;"><span style="color:white">GO</span></button>
					</div>
				</ul>
				</form>

				<li>
					<a href="{{ url('/posts/create') }}" class="btn">
						<span style="color:white">&nbsp&nbspEnter New Data</span>
					</a>
				</li>
				<li>
					<a href="{{ route('posts.index') }}" class="btn">
						<span style="color:white">&nbsp&nbsp Home</span>
					</a>
				</li>
				@endif
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
				<li class="view overlay hm-red-strong">
					<a href="{{ url('/login') }}">
						<span style="color:white">Login</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/register') }}">
						<span style="color:white">Register</span>
					</a>
				</li>
				@else

				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle btn" style="background-color:#501B1D" data-toggle="dropdown" role="button" aria-expanded="false">
						<span style="color:white">{{ Auth::user()->name }}</span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								<span style="color:Black">Log Out</span>
							</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
				@endif
			</ul>

		</div>
	</nav>

	<div class="bg">
		<div class=" container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					@include ('layouts.partials._notifications')
				</div>
			</div>

			<div class="container ">
				@yield('content')
			</div>
		</div>

	</div>



	


	<!-- Scripts -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('js/jquery.inview.js') }}"></script>

	<script src="/js/app.js"></script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>





</html>