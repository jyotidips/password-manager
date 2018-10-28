<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

	<style>
		#return-to-top {
			position: fixed;
			bottom: 20px;
			right: 20px;
			background: rgb(0, 0, 0);
			background: rgba(0, 0, 0, 0.7);
			width: 116px;
			height: 50px;
			display: block;
			text-decoration: none;
			-webkit-border-radius: 35px;
			-moz-border-radius: 35px;
			border-radius: 35px;
			display: none;
			-webkit-transition: all 0.3s linear;
			-moz-transition: all 0.3s ease;
			-ms-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}

		#return-to-top i {
			color: #fff;
			margin: 0;
			position: relative;
			left: 16px;
			top: 13px;
			font-size: 19px;
			-webkit-transition: all 0.3s ease;
			-moz-transition: all 0.3s ease;
			-ms-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}

		#return-to-top:hover i {
			color: #fff;
			top: 5px;
		}
	</style>



</head>


<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

		<a class="navbar-brand" href="/" style="font-size:45px;text-shadow: 1px 1px 2px #250e0e;color:#0b2d50;font-family: 'Lato', sans-serif;font-weight:bold;">PassIt</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ">
				<li class="nav-item active">
					<a class="nav-link" style="font-size:20px;" href="{{ route('posts.index') }}">Home
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size:20px;" href="#">Features</a>
				</li>

				@if(Auth::guest())
				<div class="pull-right" style="">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" style="font-size:20px;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
						 aria-expanded="false">
							Sign In/ Register
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="{{ route('login') }}">Log In</a>
							<a class="dropdown-item" href="{{ route('register') }}">Sign Up</a>
						</div>
					</li>
				</div>

				@endif @if(Auth::check())
				<div class="pull-right" style="">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" style="font-size:20px;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
						 aria-expanded="false">
							{{ Auth::User()->name }}
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
								Logout</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>

					</li>
				</div>
				@endif

			</ul>
		</div>
	</nav>



	<div class="jumbotron" style="background-image: url('img/new.jpg'); background-size:cover; height:500px;">
		
		<h1 class="display-3  text-center" style="color:#b7550d;">
			<b>Welcome To PassIt</b>
		</h1>

		<p class="lead   text-center" style="color:#b7550d;">The Best password manager ever!</p>

		<p class=" text-center" style="color:#b7550d;">Get attached to us and get our trustworthy service to manage your secret details with best security.</p>
		
		<p class="lead">
			<p class=" text-center" style="color:#b7550d;">
				<a class="btn btn-primary " href="#" role="button">Learn more</a>
			</p>
		</p>

	</div>

	<!--portfolio-->
	<div id="portfolio">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<div class="portfolio-heading">
						<h2>Overview Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>
					</div>
				</div>

			</div>
		</div>


		<style>
			.card {
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				transition: 0.3s;
			}

			.card:hover {
				box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
			}

			.aa {
				text-decoration: none;
			}

			.container {
				padding: 2px 16px;
			}
		</style>



		<div class="portfolio-thumbnail">
			<div class="container text-center">
				<div class="row">

					{{--
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class=" thumbnail item">
							<img src="img/overview.jpg" alt="">
							<div class="caption">
								<i class="fa fa-search" aria-hidden="true"></i>
								<p>lorem ipsum amet</p>
							</div>
						</div>
					</div> --}}

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

					<a style="text-decoration:none;" href="img/overview.jpg" class="card col-xs-6 col-sm-3 col-md-3" style="margin-right:10px;margin-bottom:10px;text-decoration:none; text-alignment:center;margin:10px;">
						<img src="img/overview.jpg" alt="Avatar" style="width:100%;height:200px;">
						<div class="container item">
							<h4>
								<b>
									<span class="caption" style="text-decoration:none;">
										<h2>Title</h2>
									</span>
								</b>
							</h4>
						</div>
					</a>

				</div>
			</div>
		</div>
	</div>








	<!--footer-->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-heading">
						<h3>
							<span>about</span> us</h3>
						<p>A good password is one that's hard to guess, yet easy to remember. So here are the top 10 ways to choose a password,
							in roughly increasing difficulty. If you don't use any of the first 5, you're well on your way. The stats are very
							rough estimates (for comparison purposes, an 8-character password is used for most calculations) However,</p>
						<p>We will provide you the best service to protect you from password stealing with worlds best security.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="footer-heading">
						<h3>
							<span>latest</span> news</h3>
						<ul>
							<li>
								<a style="text-decoration:none" href="http://www.ciotech.us/tech-news/is-your-password-secure-enough/">Is Your Password Secure Enough?</a>
							</li>
							<li>
								<a style="text-decoration:none" href="https://thehackernews.com/2018/01/skype-encrypted-calls.html">Skype Finally Adds End-to-End Encryption for Private Conversations</a>
							</li>
							<li>
								<a style="text-decoration:none" href="http://www.bbc.com/news/technology-40875534">Password guru regrets past advice</a>
							</li>
							<li>
								<a style="text-decoration:none" href="http://www.independent.co.uk/life-style/gadgets-and-tech/news/passwords-guide-protect-your-data-ico-login-details-sharing-best-security-damian-green-nadine-a8090876.html">COMPUTER PASSWORD WARNING ISSUED AFTER MPS ADMIT TO HANDING OUT LOGIN DETAILS TO OTHER PEOPLE</a>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="footer-heading">
						<h3>
							<span>follow</span> us on Secial Media
						</h3>
						<ul>
							<li>
								<a style="text-decoration:none" href="https://www.facebook.com/dipjyotii">Facebook</a>
							</li>
							<li>
								<a style="text-decoration:none" href="https://www.instagram.com/jyotidips/?hl=en">Instagram</a>
							</li>
							<li>
								<a style="text-decoration:none" href="https://plus.google.com/u/0/108656189760185732293">Google+</a>
							</li>


						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>



	<div id="bottom-footer" class="hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-left">
						&copy;All rights reserved
						<div class="credits">
							Contact
							<a style="text-decoration:none" href="https://facebook.com/dipjyotii">Author</a>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="footer-right">
						<ul class="navbar list-inline pull-right">
							<li>
								<a style="margin-right:4px;" href="#home">Home</a>
							</li>
							<li>
								<a style="margin-right:4px;" href="#about">About</a>
							</li>
							<li>
								<a style="margin-right:4px;" href="#service">Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<a href="javascript:" id="return-to-top">
						<i>Go To Top</i>
					</a>
				</div>
			</div>
		</div>
	</div>






	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('js/jquery.inview.js') }}"></script>

	<script>
		$(window).scroll(function() {
    		if ($(this).scrollTop() >= 50) {        
        		$('#return-to-top').fadeIn(200);    
    		} else {
        		$('#return-to-top').fadeOut(200);
    		}
		});
		$('#return-to-top').click(function() {      
    		$('body,html').animate({
        		scrollTop : 0 
		}, 500);
	});
	</script>

</body>

</html>