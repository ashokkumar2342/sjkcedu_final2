<!DOCTYPE html>
<html>
<head>
	<title>	SAT JINDA KALYANA COLLEGE OF EDUCATION
KALANAUR (ROHTAK)</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.rateyo.css') }}"/>
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mmenu.all.css') }}" /> --}}
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('inner-page-style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="#">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@sjkcedu.in" itemprop="email"><i class="fas fa-envelope"></i> info@sjkcedu.in</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i>9215519860, 9306824228</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<a href="">Login /</a>
							<a href="">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo" style="margin:10px">
						{{-- <img src="#" alt="S.J.K COLLEGE OF EDUCATION"> --}}
						<H1>S.J.K COLLEGE OF EDUCATION</H1>
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="{{ route('front.index') }}">Home</a></li>
								<li class="menu-parent">About Us
									<ul class="sub-menu">
										<li><a href="{{ route('front.message.requirement') }}">Message & Requirement</a></li>
										<li><a href="{{ route('front.trust') }}">Trust & Society</a></li>
										{{-- <li class="menu-parent">Child
											<ul class="sub-menu">
												<li><a href="">Grand-child</a></li>
												<li><a href="">Grand-child</a></li>
											</ul>
										</li> --}}
									</ul>
								</li>
								<li class="menu-parent">College
									<ul class="sub-menu">
										<li><a href="{{ route('front.faculty') }}">Faculty</a></li>
										<li><a href="{{ route('front.infrastructure') }}">Infrastructure</a></li>
										<li><a href="{{ route('front.balance.sheet') }}">Balance Sheet</a></li>
										<li><a href="{{ route('front.Course.Offered') }}">Course offered</a></li>
										<li><a href="{{ route('front.support') }}">Support</a></li>
									</ul>
								</li>
								<li class="menu-parent">Mandatory
									<ul class="sub-menu">
										<li><a href="#">Mandatory</a></li>
										<li><a href="#">Application</a></li>
									</ul>
								</li>
								<li class="menu-parent">Extra
									<ul class="sub-menu">
										<li><a href="{{ route('front.gallery') }}">Photo Gallery</a></li>
										<li><a href="#">Mail</a></li>
										<li><a href="{{ route('front.news') }}">News & Events</a></li>
									</ul>
								</li>
								<li><a href="{{ route('front.contacts') }}">Contact</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>