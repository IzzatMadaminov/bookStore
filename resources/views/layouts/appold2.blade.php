<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'bookStore') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>
<body>
    <div id="app">
        <div class="site-wrapper" id="top">
		
		<div class="site-header header-2 mb--20 d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
                            <a class="site-brand text-primary font-weight-bold" href="{{ url('/') }}">
                                <h1>{{ config('app.name', 'BookStore') }}</h1>
                            </a>    
                        <!-- <a href="{{ route('home') }}" class="site-brand">
								<img src="image/logo.png" alt="">
							</a> -->
						</div>
						<div class="col-lg-4">
							<div class="header-search-block">
								<input type="text" placeholder="Search entire store here">
								<button>Search</button>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="main-navigation flex-lg-right">
								<div class="cart-widget">
									<div class="cart-block">
										<div class="cart-total">
											<span class="text-number">
												1
											</span>
											<span class="text-item">
												Shopping Cart
											</span>
											<span class="price">
												£0.00
												<i class="fas fa-chevron-down"></i>
											</span>
										</div>
										<div class="cart-dropdown-block">
											<div class=" single-cart-block ">
												<div class="cart-product">
													<a href="{{ route('product-details') }}" class="image">
														<img src="image/products/cart-product-1.jpg" alt="">
													</a>
													<div class="content">
														<h3 class="title"><a href="{{ route('product-details') }}">Kodak PIXPRO
																Astro Zoom AZ421 16 MP</a></h3>
														<p class="price"><span class="qty">1 ×</span> £87.34</p>
														<button class="cross-btn"><i class="fas fa-times"></i></button>
													</div>
												</div>
											</div>
											<div class=" single-cart-block ">
												<div class="btn-block">
													<a href="{{ route('cart') }}" class="btn">View Cart <i
															class="fas fa-chevron-right"></i></a>
													<a href="{{ route('checkout') }}" class="btn btn--primary">Check Out <i
															class="fas fa-chevron-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
						<div class="col-lg-2 login-block">
							<a href="login-register.html" class="font-weight-bold">Login</a>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom bg-primary">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<nav class="category-nav white-nav  ">
								<div>
									<a href="javascript:void(0)" class="category-trigger"><i
											class="fa fa-bars"></i>Browse
										categories</a>
									<ul class="category-menu">
										<li class="cat-item has-children">
											<a href="#">Arts & Photography</a>
											<ul class="sub-menu">
												<li><a href="#">Bags & Cases</a></li>
												<li><a href="#">Binoculars & Scopes</a></li>
												<li><a href="#">Digital Cameras</a></li>
												<li><a href="#">Film Photography</a></li>
												<li><a href="#">Lighting & Studio</a></li>
											</ul>
										</li>
										<li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
											<ul class="sub-menu">
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Business & Money</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Calendars</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Children's Books</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Comics</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item"><a href="#">Perfomance Filters</a></li>
										<li class="cat-item has-children"><a href="#">Cookbooks</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item "><a href="#">Accessories</a></li>
										<li class="cat-item "><a href="#">Education</a></li>
										<li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
										<li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
												Categories</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="col-lg-3">
							<div class="header-phone color-white">
								<div class="icon">
									<i class="fas fa-headphones-alt"></i>
								</div>
								<div class="text">
									<p>Free Support 24/7</p>
									<p class="font-weight-bold number">+998 97 525 88 97</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-navigation flex-lg-right">
								<ul class="main-menu menu-right main-menu--white li-last-0">
									<li class="menu-item has-children">
										<a href="javascript:void(0)">Home <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu">
											<li> <a href="{{ route('home') }}">Home Four</a></li>
										</ul>
									</li>
									<!-- Shop -->
									<li class="menu-item has-children mega-menu">
										<a href="javascript:void(0)">shop <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu four-column">
											<li class="cus-col-25">
												<h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
												<ul class="mega-single-block">
													<li><a href="{{ route('shop-grid') }}">Fullwidth</a></li>
													<li><a href="{{ route('shop-grid-left-sidebar') }}">left Sidebar</a></li>
													<li><a href="{{ route('shop-grid-right-sidebar') }}">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-25">
												<h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
												<ul class="mega-single-block">
													<li><a href="{{ route('shop-list') }}">Fullwidth</a></li>
													<li><a href="{{ route('shop-list-left-sidebar') }}">left Sidebar</a></li>
													<li><a href="{{ route('shop-list-right-sidebar') }}">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-25">
												<h3 class="menu-title"> <a href="javascript:void(0)">Product Details
														1</a></h3>
												<ul class="mega-single-block">
													<li><a href="{{ route('product-details') }}">Product Details Page</a></li>
													<li><a href="{{ route('product-details-affiliate') }}">Product Details
															Affiliate</a></li>
													<li><a href="{{ route('product-details-group') }}">Product Details Group</a>
													</li>
													<li><a href="{{ route('product-details-variable') }}">Product Details
															Variables</a></li>
												</ul>
											</li>
											<li class="cus-col-25">
												<h3 class="menu-title"><a href="javascript:void(0)">Product Details
														2</a></h3>
												<ul class="mega-single-block">
													<li><a href="{{ route('product-details-left-thumbnail') }}">left Thumbnail</a>
													</li>
													<li><a href="{{ route('product-details-right-thumbnail') }}">Right
															Thumbnail</a></li>
													<li><a href="{{ route('product-details-left-gallery') }}">Left Gallery</a>
													</li>
													<li><a href="{{ route('product-details-right-gallery') }}">Right Gallery</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<!-- Pages -->
									<li class="menu-item has-children">
										<a href="javascript:void(0)">Pages <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu">
											<li><a href="{{ route('cart') }}">Cart</a></li>
											<li><a href="{{ route('checkout') }}">Checkout</a></li>
											<li><a href="{{ route('compare') }}">Compare</a></li>
											<li><a href="{{ route('wishlist') }}">Wishlist</a></li>
											<li><a href="login-register.html">Login Register</a></li>
											<li><a href="{{ route('my-account') }}">My Account</a></li>
											<li><a href="order-complete.html">Order Complete</a></li>
											<li><a href="{{ route('faq') }}">Faq</a></li>
											<li><a href="{{ route('contact-2') }}">contact 02</a></li>
										</ul>
									</li>
									<!-- Blog -->
									<li class="menu-item has-children mega-menu">
										<a href="javascript:void(0)">Blog <i
												class="fas fa-chevron-down dropdown-arrow"></i></a>
										<ul class="sub-menu three-column">
											<li class="cus-col-33">
												<h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
												<ul class="mega-single-block">
													<li><a href="blog.html">Full Widh (Default)</a></li>
													<li><a href="blog-left-sidebar.html">left Sidebar</a></li>
													<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-33">
												<h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
												<ul class="mega-single-block">
													<!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
													<li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
													<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
												</ul>
											</li>
											<li class="cus-col-33">
												<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
												</h3>
												<ul class="mega-single-block">
													<li><a href="blog-details.html">Image Format (Default)</a></li>
													<li><a href="blog-details-gallery.html">Gallery Format</a></li>
													<li><a href="blog-details-audio.html">Audio Format</a></li>
													<li><a href="blog-details-video.html">Video Format</a></li>
													<li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="menu-item">
										<a href="{{ route('contact') }}">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-mobile-menu">
			<header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
				<div class="container">
					<div class="row align-items-sm-end align-items-center">
						<div class="col-md-4 col-7">
							<a href="{{ route('home') }}" class="site-brand">
								<img src="image/logo.png" alt="">
							</a>
						</div>
						<div class="col-md-5 order-3 order-md-2">
							<nav class="category-nav   primary-nav">
								<div>
									<a href="javascript:void(0)" class="category-trigger"><i
											class="fa fa-bars"></i>Browse
										categories</a>
									<ul class="category-menu">
										<li class="cat-item has-children">
											<a href="#">Arts & Photography</a>
											<ul class="sub-menu">
												<li><a href="#">Bags & Cases</a></li>
												<li><a href="#">Binoculars & Scopes</a></li>
												<li><a href="#">Digital Cameras</a></li>
												<li><a href="#">Film Photography</a></li>
												<li><a href="#">Lighting & Studio</a></li>
											</ul>
										</li>
										<li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
											<ul class="sub-menu">
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
												<li class="single-block">
													<h3 class="title">WHEEL SIMULATORS</h3>
													<ul>
														<li><a href="#">Bags & Cases</a></li>
														<li><a href="#">Binoculars & Scopes</a></li>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Film Photography</a></li>
														<li><a href="#">Lighting & Studio</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Business & Money</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Calendars</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Children's Books</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Comics</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item"><a href="#">Perfomance Filters</a></li>
										<li class="cat-item has-children"><a href="#">Cookbooks</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item "><a href="#">Accessories</a></li>
										<li class="cat-item "><a href="#">Education</a></li>
										<li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
										<li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
												Categories</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="col-md-3 col-5  order-md-3 text-right">
							<div class="mobile-header-btns header-top-widget">
								<ul class="header-links">
									<li class="sin-link">
										<a href="{{ route('cart') }}" class="cart-link link-icon"><i class="ion-bag"></i></a>
									</li>
									<li class="sin-link">
										<a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
												class="ion-navicon"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Off Canvas Navigation Start-->
			<aside class="off-canvas-wrapper">
				<div class="btn-close-off-canvas">
					<i class="ion-android-close"></i>
				</div>
				<div class="off-canvas-inner">
					<!-- search box start -->
					<div class="search-box offcanvas">
						<form>
							<input type="text" placeholder="Search Here">
							<button class="search-btn"><i class="ion-ios-search-strong"></i></button>
						</form>
					</div>
					<!-- search box end -->
					<!-- mobile menu start -->
					<div class="mobile-navigation">
						<!-- mobile menu navigation start -->
						<nav class="off-canvas-nav">
							<ul class="mobile-menu main-mobile-menu">
								<li class="menu-item">
									<a href="{{ route('home') }}">Home</a>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Blog</a>
									<ul class="sub-menu">
										<li class="menu-item-has-children">
											<a href="#">Blog Grid</a>
											<ul class="sub-menu">
												<li><a href="blog.html">Full Widh (Default)</a></li>
												<li><a href="blog-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Blog List</a>
											<ul class="sub-menu">
												<li><a href="blog-list.html">Full Widh (Default)</a></li>
												<li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Blog Details</a>
											<ul class="sub-menu">
												<li><a href="blog-details.html">Image Format (Default)</a></li>
												<li><a href="blog-details-gallery.html">Gallery Format</a></li>
												<li><a href="blog-details-audio.html">Audio Format</a></li>
												<li><a href="blog-details-video.html">Video Format</a></li>
												<li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Shop</a>
									<ul class="sub-menu">
										<li class="menu-item-has-children">
											<a href="#">Shop Grid</a>
											<ul class="sub-menu">
												<li><a href="{{ route('shop-grid') }}">Fullwidth</a></li>
												<li><a href="{{ route('shop-grid-left-sidebar') }}">left Sidebar</a></li>
												<li><a href="{{ route('shop-grid-right-sidebar') }}">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Shop List</a>
											<ul class="sub-menu">
												<li><a href="{{ route('shop-list') }}">Fullwidth</a></li>
												<li><a href="{{ route('shop-list-left-sidebar') }}">left Sidebar</a></li>
												<li><a href="{{ route('shop-list-right-sidebar') }}">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Product Details 1</a>
											<ul class="sub-menu">
												<li><a href="{{ route('product-details') }}">Product Details Page</a></li>
												<li><a href="{{ route('product-details-affiliate') }}">Product Details
														Affiliate</a></li>
												<li><a href="{{ route('product-details-group') }}">Product Details Group</a></li>
												<li><a href="{{ route('product-details-variable') }}">Product Details
														Variables</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Product Details 2</a>
											<ul class="sub-menu">
												<li><a href="{{ route('product-details-left-thumbnail') }}">left Thumbnail</a>
												</li>
												<li><a href="{{ route('product-details-right-thumbnail') }}">Right Thumbnail</a>
												</li>
												<li><a href="{{ route('product-details-left-gallery') }}">Left Gallery</a></li>
												<li><a href="{{ route('product-details-right-gallery') }}">Right Gallery</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{ route('cart') }}">Cart</a></li>
										<li><a href="{{ route('checkout') }}">Checkout</a></li>
										<li><a href="{{ route('compare') }}">Compare</a></li>
										<li><a href="{{ route('wishlist') }}">Wishlist</a></li>
										<li><a href="login-register.html">Login Register</a></li>
										<li><a href="{{ route('my-account') }}">My Account</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="{{ route('faq') }}">Faq</a></li>
										<li><a href="{{ route('contact-2') }}">contact 02</a></li>
									</ul>
								</li>
								<li><a href="{{ route('contact') }}">Contact</a></li>
							</ul>
						</nav>
						<!-- mobile menu navigation end -->
					</div>
					<!-- mobile menu end -->
					<nav class="off-canvas-nav">
						<ul class="mobile-menu menu-block-2">
							<li class="menu-item-has-children">
								<a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li> <a href="{{ route('cart') }}">USD $</a></li>
									<li> <a href="{{ route('checkout') }}">EUR €</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li>Eng</li>
									<li>Ban</li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">My Account <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li><a href="">My Account</a></li>
									<li><a href="">Order History</a></li>
									<li><a href="">Transactions</a></li>
									<li><a href="">Downloads</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<div class="off-canvas-bottom">
						<div class="contact-list mb--10">
							<a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
							<a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
						</div>
						<div class="off-canvas-social">
							<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
							<a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</aside>
			<!--Off Canvas Navigation End-->
		</div>
		<div class="sticky-init fixed-header common-sticky">
			<div class="container d-none d-lg-block">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<a href="{{ route('home') }}" class="site-brand">
							<img src="image/logo.png" alt="">
						</a>
					</div>
					<div class="col-lg-8">
						<div class="main-navigation flex-lg-right">
							<ul class="main-menu menu-right ">
								<li class="menu-item has-children">
									<a href="javascript:void(0)">Home <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu">
										<li> <a href="{{ route('home') }}">Home One</a></li>
										<li> <a href="index-2.html">Home Two</a></li>
										<li> <a href="index-3.html">Home Three</a></li>
										<li> <a href="index-4.html">Home Four</a></li>
									</ul>
								</li>
								<!-- Shop -->
								<li class="menu-item has-children mega-menu">
									<a href="javascript:void(0)">shop <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu four-column">
										<li class="cus-col-25">
											<h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
											<ul class="mega-single-block">
												<li><a href="{{ route('shop-grid') }}">Fullwidth</a></li>
												<li><a href="{{ route('shop-grid-left-sidebar') }}">left Sidebar</a></li>
												<li><a href="{{ route('shop-grid-right-sidebar') }}">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-25">
											<h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
											<ul class="mega-single-block">
												<li><a href="{{ route('shop-list') }}">Fullwidth</a></li>
												<li><a href="{{ route('shop-list-left-sidebar') }}">left Sidebar</a></li>
												<li><a href="{{ route('shop-list-right-sidebar') }}">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-25">
											<h3 class="menu-title"> <a href="javascript:void(0)">Product Details 1</a>
											</h3>
											<ul class="mega-single-block">
												<li><a href="{{ route('product-details') }}">Product Details Page</a></li>
												<li><a href="{{ route('product-details-affiliate') }}">Product Details
														Affiliate</a></li>
												<li><a href="{{ route('product-details-group') }}">Product Details Group</a></li>
												<li><a href="{{ route('product-details-variable') }}">Product Details
														Variables</a></li>
											</ul>
										</li>
										<li class="cus-col-25">
											<h3 class="menu-title"><a href="javascript:void(0)">Product Details 2</a>
											</h3>
											<ul class="mega-single-block">
												<li><a href="{{ route('product-details-left-thumbnail') }}">left Thumbnail</a>
												</li>
												<li><a href="{{ route('product-details-right-thumbnail') }}">Right Thumbnail</a>
												</li>
												<li><a href="{{ route('product-details-left-gallery') }}">Left Gallery</a></li>
												<li><a href="{{ route('product-details-right-gallery') }}">Right Gallery</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<!-- Pages -->
								<li class="menu-item has-children">
									<a href="javascript:void(0)">Pages <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu">
										<li><a href="{{ route('cart') }}">Cart</a></li>
										<li><a href="{{ route('checkout') }}">Checkout</a></li>
										<li><a href="{{ route('compare') }}">Compare</a></li>
										<li><a href="{{ route('wishlist') }}">Wishlist</a></li>
										<li><a href="login-register.html">Login Register</a></li>
										<li><a href="{{ route('my-account') }}">My Account</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="{{ route('faq') }}">Faq</a></li>
										<li><a href="{{ route('contact-2') }}">contact 02</a></li>
									</ul>
								</li>
								<!-- Blog -->
								<li class="menu-item has-children mega-menu">
									<a href="javascript:void(0)">Blog <i
											class="fas fa-chevron-down dropdown-arrow"></i></a>
									<ul class="sub-menu three-column">
										<li class="cus-col-33">
											<h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
											<ul class="mega-single-block">
												<li><a href="blog.html">Full Widh (Default)</a></li>
												<li><a href="blog-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-33">
											<h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
											<ul class="mega-single-block">
												<!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
												<li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
												<li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
											</ul>
										</li>
										<li class="cus-col-33">
											<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
											<ul class="mega-single-block">
												<li><a href="blog-details.html">Image Format (Default)</a></li>
												<li><a href="blog-details-gallery.html">Gallery Format</a></li>
												<li><a href="blog-details-audio.html">Audio Format</a></li>
												<li><a href="blog-details-video.html">Video Format</a></li>
												<li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<a href="{{ route('contact') }}">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
        
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<!--=================================
    Footer Area
===================================== -->
<footer class="site-footer">
		<div class="container">
			<div class="row justify-content-between  section-padding">
				<div class=" col-xl-3 col-lg-4 col-sm-6">
					<div class="single-footer pb--40">
						<div class="brand-footer footer-title">
							<img src="image/logo--footer.png" alt="">
						</div>
						<div class="footer-contact">
							<p><span class="label">Address:</span><span class="text">Example Street 98, HH2 BacHa, New
									York, USA</span></p>
							<p><span class="label">Phone:</span><span class="text">+18088 234 5678</span></p>
							<p><span class="label">Email:</span><span class="text">suport@hastech.com</span></p>
						</div>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-2 col-sm-6">
					<div class="single-footer pb--40">
						<div class="footer-title">
							<h3>Information</h3>
						</div>
						<ul class="footer-list normal-list">
							<li><a href="">Prices drop</a></li>
							<li><a href="">New products</a></li>
							<li><a href="">Best sales</a></li>
							<li><a href="">Contact us</a></li>
							<li><a href="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-2 col-sm-6">
					<div class="single-footer pb--40">
						<div class="footer-title">
							<h3>Extras</h3>
						</div>
						<ul class="footer-list normal-list">
							<li><a href="">Delivery</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">Stores</a></li>
							<li><a href="">Contact us</a></li>
							<li><a href="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-4 col-sm-6">
					<div class="footer-title">
						<h3>Newsletter Subscribe</h3>
					</div>
					<div class="newsletter-form mb--30">
						<form action="./php/mail.php">
							<input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
							<button class="btn btn--primary w-100">Subscribe</button>
						</form>
					</div>
					<div class="social-block">
						<h3 class="title">STAY CONNECTED</h3>
						<ul class="social-list list-inline">
							<li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a>
							</li>
							<li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
							<li class="single-social google"><a href=""><i
										class="ion ion-social-googleplus-outline"></i></a></li>
							<li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p class="copyright-heading">Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam
					vel magna volutpat, posuere eros</p>
				<a href="#" class="payment-block">
					<img src="image/icon/payment.png" alt="">
				</a>
				<p class="copyright-text">Copyright © 2019 <a href="#" class="author">Pustok</a>. All Right Reserved.
					<br>
					Design By Pustok</p>
			</div>
		</div>
	</footer>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
