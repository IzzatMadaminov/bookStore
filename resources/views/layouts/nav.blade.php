<div class="site-header header-2 mb--20 d-none d-lg-block">
    <div class="header-middle pt--8 pb--8">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
            <!-- <div class="row align-items-center"> -->
                <div class="col-lg-3">
                    <a class="navbar-brand text-primary font-weight-bold" href="{{ route('home') }}">
                        <h1>{{ config('app.name', 'BookStore') }}</h1>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-lg-9 collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="col-lg-12">
                            <div class="header-search-block">
                                <input type="text" placeholder="Search entire store here">
                                <button>Search</button>
                            </div>
                        </div>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- <div class="col-8"> -->
                            <div class="main-navigation flex-lg-right pr-3">
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
                        <!-- </div> -->
                        <!-- <div class="col-lg-4"> -->
                        <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                            @endguest
                        <!-- </div> -->
                    </ul>
                </div>
        <!-- </div> -->
            </div>
        </nav>
    </div>

    <div class="header-bottom bg-primary">
        <div class="container-fluid">
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
                            <p class="font-weight-bold number">+01-202-555-0181</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right main-menu--white li-last-0">
                            <li class="menu-item">
                                <a href="{{ route('home') }}">Home</a>
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
                                    <li><a href="{{ route('login-register') }}">Login Register</a></li>
                                    <li><a href="{{ route('my-account') }}">My Account</a></li>
                                    <li><a href="{{ route('order-complete') }}">Order Complete</a></li>
                                    <li><a href="{{ route('faq') }}">Faq</a></li>
                                    <li><a href="{{ route('contact-2') }}">contact 02</a></li>
                                </ul>
                            </li>
                            <!-- Blog -->
                            <li class="menu-item">
                                <a href="{{ route('blog-right-sidebar') }}">Blog</a>
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
                    <a class="site-brand text-primary font-weight-bold" href="{{ route('home') }}">
                        <h1>{{ config('app.name', 'BookStore') }}</h1>
                    </a>
                </div>
                <div class="col-md-5 order-3 order-md-2">
                    <nav class="category-nav   ">
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
                        <li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="menu-item">
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="menu-item">
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else
                                    <li class="menu-item dropdown">
                                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                            @endguest
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('blog-right-sidebar') }}">Blog</a>
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
                                <li><a href="{{ route('login-register') }}">Login Register</a></li>
                                <li><a href="{{ route('my-account') }}">My Account</a></li>
                                <li><a href="{{ route('order-complete') }}">Order Complete</a></li>
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
                            <li><a href="{{ route('my-account') }}">My Account</a></li>
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
                <a class="site-brand text-primary font-weight-bold" href="{{ route('home') }}">
                    <h1>{{ config('app.name', 'BookStore') }}</h1>
                </a>
            </div>
            <div class="col-lg-8">
                <div class="main-navigation flex-lg-right">
                    <ul class="main-menu menu-right ">
                        <li class="menu-item">
                            <a href="{{ route('home') }}">Home</a>
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
                                <li><a href="{{ route('login-register') }}">Login Register</a></li>
                                <li><a href="{{ route('my-account') }}">My Account</a></li>
                                <li><a href="{{ route('order-complete') }}">Order Complete</a></li>
                                <li><a href="{{ route('faq') }}">Faq</a></li>
                                <li><a href="{{ route('contact-2') }}">contact 02</a></li>
                            </ul>
                        </li>
                        <!-- Blog -->
                        <li class="menu-item">
                            <a href="{{ route('blog-right-sidebar') }}">Blog</a>
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