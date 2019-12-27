<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 081899345678</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@komputerin.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt="" /></a>
                    </div>
                    
                </div>

                <div class="col-sm-4">
                    @include ('frontEnd.layouts.search')
                </div>

                
                <div class="col-sm-4">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

    <section class="hero-area bg-3 text-center overly" style=" margin-top: -40px;">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Contetnt -->
                <div class="content-block">
                    <h1>Buy & Sell Near You </h1>
                    <p>Temukan segala perlengkapan Hardware anda disini.</p>
                    <div class="short-popular-category-list text-center">
                        <h2>Popular Category</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa-computer"></i> Processor</a></li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa-computer"></i> Motherboard</a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa"></i> VGA</a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa"></i> RAM</a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa"></i> Power Suply</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- Advance Search -->
               
                
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

</header><!--/header-->