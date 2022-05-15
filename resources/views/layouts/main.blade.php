
<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
			

    </head>
	
	<body>
		<!-- HEADER -->
		<header>
			
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 066-200-95-25</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> milioglo2000@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Филатова</a></li>
					</ul>
				</div>
			</div>
			
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="get" action="{{route('main.search')}}">
									@csrf
									<input type="text" class="input" name="query" placeholder="Search here">
									<button class="search-btn" type="submit" >Поиск</button>
								</form>
							</div>
						</div>
						
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div>
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="{{route('main.favorite')}}">
										<i class="fa fa-heart-o"></i>
										<span>Избранное</span>
										
									</a>
								</div>
							</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="col-md-3 clearfix">
									<div class="header-ctn">
										<!-- Wishlist -->
										<div>
											<a href="{{route('main.cart')}}">
												<i class="fa fa-shopping-cart"></i>
												<span>Корзина</span>
												
											</a>
										</div>
								
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
			

			
		</header>
		<!-- /HEADER -->
		
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="{{route('main.index')}}">Главная</a></li>
						<li><a href="{{route('main.shop')}}">Магазин</a></li>
						<li><a href="#">Сборка компьютера</a></li>

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		@yield('content')

		<footer id="footer">
			
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">О нас</h3>
								<p>У нас вы можете преобрести все новейшие устройства.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Филатова</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>066-200-95-25</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>milioglo2000@gmail.com</a></li>
								</ul>
							</div>
						</div>

						

						<div class="clearfix visible-xs"></div>

						

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="{{route('main.index')}}">Главная</a></li>
									<li><a href="{{route('main.shop')}}">Магазин</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
			
		</footer>
		<!-- /FOOTER -->

		
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/slick.min.js')}}"></script>
		<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('assets/js/main.js')}}"></script>	
		
	</body>
	</html>
