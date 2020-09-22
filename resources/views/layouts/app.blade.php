


<!DOCTYPE html>
<html>

<head>
	<base href="{{asset('')}}">
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>Marketshop - eCommerce HTML Template</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
    <!-- CSS Part End-->
</head>

<body>
    <div class="wrapper-wide">
        <div id="header">
            <!-- Top Bar Start-->
            <nav id="top" class="htop">
                <div class="container">
                    <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                        <div class="pull-left flip left-top">
                            <div class="links">
                                <ul>
                                    <li class="mobile"><i class="fa fa-phone"></i>+84 355382277</li>
                                    <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>truonglequang1998@gmail.com</a></li>            

                                </ul>
                            </div>
                            <div id="language" class="btn-group">
                                <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="image/flags/gb.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/gb.png" alt="English" title="English" /> English</button>
                                    </li>
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="image/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="top-links" class="nav pull-right flip">
                            <ul>
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
                                    <a>
                                        {{ Auth::user()->name }}
                                    </a>
                                         @if (Auth::user()->role==1)
                                   <a href="{{route('admin')}}"> Admin Page </a>
                  
                                         @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </li>
                            @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Top Bar End-->
            <!-- Header Start-->
            <header class="header-row">
                <div class="container">
                    <div class="table-container">
                        <!-- Logo Start -->
                        <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                            <div id="logo">
                                <a href="http://localhost:81/eCommerce/public/"><img class="img-responsive" src="image/logo.png" title="MarketShop" alt="MarketShop" /></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Mini Cart Start-->
                        <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div id="cart">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                    <span class="cart-icon pull-left flip"></span>
                                    <span id="cart-total">2 item(s) - $1,132.00</span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="product.html"><img class="img-thumbnail" title="Xitefun Causal Wear Fancy Shoes" alt="Xitefun Causal Wear Fancy Shoes" src="image/product/sony_vaio_1-50x50.jpg"></a>
                                                    </td>
                                                    <td class="text-left"><a href="product.html">Xitefun Causal Wear Fancy Shoes</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$902.00</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="product.html"><img class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="image/product/samsung_tab_1-50x50.jpg"></a>
                                                    </td>
                                                    <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$230.00</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                                        <td class="text-right">$940.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                        <td class="text-right">$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>VAT (20%)</strong></td>
                                                        <td class="text-right">$188.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                        <td class="text-right">$1,132.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> Checkout</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mini Cart End-->
                        <!-- Search Start-->
                        <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                            <div id="search" class="input-group">
                                <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                                <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Search End-->
                    </div>
                </div>
            </header>
            <!-- Header End-->
            <!-- Main Menu Start-->
            <div class="container">
                <nav id="menu" class="navbar">
                    <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="home_link" title="Home" href="/"><span>Home</span></a></li>
                            <li class="mega-menu dropdown"><a>Categories</a>
                                <div class="dropdown-menu">
                                    <div class="column col-lg-2 col-md-3"> <a href="category.html">Electronics</a>
                                        <div>
                                            <ul>
                                            @foreach ($allcategories as $category)
                                                <li> <a href="categories/{{$category->id}}">{{$category->name}} <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            @foreach ($category->manufacturer as $manufacturer)                                                                        
                                                            <li> <a href="manufacturers/{{$manufacturer->id}}">{{$manufacturer->name}} </a> </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                            </li>
                            <li class="menu_brands dropdown"><a href="#">Brands</a>
                                <div class="dropdown-menu">
                                    @foreach ($allmanufacturers as $manufacturer)               
                                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6">
                                    <a href="manufacturers/{{$manufacturer->id}}"><img src="storage/manufacturers/{{$manufacturer->image}}" title="Apple" alt="Apple" style="height:60px" /></a><a href="anufacturers/{{$manufacturer->id}}">{{$manufacturer->name}}</a></div>
                                    @endforeach

                            </li>
                            <li class="dropdown information-link"><a>Pages</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="category.html">Category (Grid/List)</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="search.html">Search</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="sitemap.html">Sitemap</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="contact-link"><a href="contact-us.html">Contact Us</a></li>
                        <li class="custom-link-right"><a href="{{route('showOrder')}}" target="_blank"> Buy Now!</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Main Menu End-->
        </div>
        @yield('content')
        <footer id="footer">
            <div class="fpart-first">
                <div class="container">
                    <div class="row">
                        <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <h5>Contact Details</h5>
                            <ul>
                                <li class="address"><i class="fa fa-map-marker"></i>Dhaka, Bangladesh</li>
                                <li class="mobile"><i class="fa fa-phone"></i>+8801755466336</li>
                                <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="contact-us.html">Contact Us</a>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-us.html">Delivery Information</a></li>
                                <li><a href="about-us.html">Privacy Policy</a></li>
                                <li><a href="about-us.html">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Customer Service</h5>
                            <ul>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="sitemap.html">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Extras</h5>
                            <ul>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>My Account</h5>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fpart-second">
                <div class="container">
                    <div id="powered" class="clearfix">
                        <div class="powered_text pull-left flip">
                            <p>Marketshop Ecommerce Template © 2016 | Template By <a href="https://github.com/amibappy" target="_blank">Ami Bappy</a></p>
                        </div>
                        <div class="social pull-right flip">
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/rss.png" alt="RSS" title="RSS"> </a>
                        </div>
                    </div>
                    <div class="bottom-row">
                        <div class="custom-text text-center">
                            <p>This is a CMS block. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="payments_types">
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_american.png" alt="american-express" title="American Express"></a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_discover.png" alt="discover" title="Discover"></a>
                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
        </footer>
        <!--Footer End-->
    </div>
    <!-- Wrapper End -->

    <!-- JS Part Start-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    
   
    <!-- JS Part End-->
</body>

</html>
