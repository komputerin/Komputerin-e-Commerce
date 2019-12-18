<section>
	<div class="container">
		<div class="row my-2">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="{{url('/index')}}">
						<img src="{{url('img/logo.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">About us</a>
							</li>
							
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Kategori <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="category.html">Processor </a>
									<a class="dropdown-item" href="single.html">Motherboard</a>
									<a class="dropdown-item" href="store-single.html">VGA</a>
									<a class="dropdown-item" href="dashboard.html">RAM</a>
									<a class="dropdown-item" href="user-profile.html">SSD</a>
									<a class="dropdown-item" href="submit-coupon.html">Hardisk</a>
									<a class="dropdown-item" href="blog.html">Casing</a>
									<a class="dropdown-item" href="single-blog.html">Power Suply</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Info <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Status Pemesanan</a>
									<a class="dropdown-item" href="#">Pembayaran</a>
									<a class="dropdown-item" href="#">Cara Pemesanan</a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="{{url('login')}}" type="button">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link add-button" href="#"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-3 text-center overly">
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
				<div class="advance-search">
					<form action="#">
						<div class="row">
							<!-- Store Search -->
							<div class="col-lg-6 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
									<!-- Search Button -->
									<button class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
					</form>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Ads</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->

			@foreach($products as $product)
			<div class="col-sm-12 col-lg-3">
				<!-- product card -->
				<div class="product-item bg-light">
					<div class="card">
						<div class="thumb-content">
							<!-- <div class="price">$200</div> -->
							<a href="">
								<img class="card-img-top img-fluid" src="{{url('img/products/products-3.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title"><a href="/list-product/{{ $product->id }}">{{ $product->nama }}</a></h4>
							<ul class="list-inline product-meta">
								<li class="list-inline-item">
									<a href=""><i class="fa fa-folder-open-o"></i>Processor</a>
								</li>
								<li class="list-inline-item">
									<a href=""><i class="fa fa-calendar"></i>26th December</a>
								</li>
							</ul>
							<h3><p class="card-text"></p>{{ $product->harga }}</h3>
							<div class="product-ratings">
								<ul class="list-inline">
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach


			<div class="col-sm-12 col-lg-3">
				<!-- product card -->
				<div class="product-item bg-light">
					<div class="card">
						<div class="thumb-content">
							<!-- <div class="price">$200</div> -->
							<a href="">
								<img class="card-img-top img-fluid" src="{{url('img/products/products-5.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title"><a href="">HARDISK RAID - TOSHIBA</a></h4>
							<ul class="list-inline product-meta">
								<li class="list-inline-item">
									<a href=""><i class="fa fa-folder-open-o"></i>Hardisk</a>
								</li>
								<li class="list-inline-item">
									<a href=""><i class="fa fa-calendar"></i>26th December</a>
								</li>
							</ul>
							<h3><p class="card-text">Rp. 1.850.000</p></h3>
							<div class="product-ratings">
								<ul class="list-inline">
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-lg-3">
				<!-- product card -->
				<div class="product-item bg-light">
					<div class="card">
						<div class="thumb-content">
							<!-- <div class="price">$200</div> -->
							<a href="">
								<img class="card-img-top img-fluid" src="{{url('img/products/products-6.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title"><a href="">SSD 2,5 Inch - SAMSUNG</a></h4>
							<ul class="list-inline product-meta">
								<li class="list-inline-item">
									<a href=""><i class="fa fa-folder-open-o"></i>SSD</a>
								</li>
								<li class="list-inline-item">
									<a href=""><i class="fa fa-calendar"></i>26th December</a>
								</li>
							</ul>
							<h3><p class="card-text">Rp. 480.000</p></h3>
							<div class="product-ratings">
								<ul class="list-inline">
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		
			<div class="col-sm-12 col-lg-3">
				<!-- product card -->
				<div class="product-item bg-light">
					<div class="card">
						<div class="thumb-content">
							<!-- <div class="price">$200</div> -->
							<a href="">
								<img class="card-img-top img-fluid" src="{{url('img/products/products-7.jpg')}}" alt="Card image cap">
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title"><a href="">GIGABYTE Motherboard Socket TR4 X399 AORUS Pro</a></h4>
							<ul class="list-inline product-meta">
								<li class="list-inline-item">
									<a href=""><i class="fa fa-folder-open-o"></i>Motherboard</a>
								</li>
								<li class="list-inline-item">
									<a href=""><i class="fa fa-calendar"></i>26th December</a>
								</li>
							</ul>
							<h3><p class="card-text">Rp. 4.338.000</p></h3>
							<div class="product-ratings">
								<ul class="list-inline">
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-1"></i> 
								<h4>Electronics</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Laptops <span>93</span></a></li>
								<li><a href="category.html">Iphone <span>233</span></a></li>
								<li><a href="category.html">Microsoft  <span>183</span></a></li>
								<li><a href="category.html">Monitors <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-apple icon-bg-2"></i> 
								<h4>Restaurants</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cafe <span>393</span></a></li>
								<li><a href="category.html">Fast food <span>23</span></a></li>
								<li><a href="category.html">Restaurants  <span>13</span></a></li>
								<li><a href="category.html">Food Track<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i> 
								<h4>Real Estate</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Farms <span>93</span></a></li>
								<li><a href="category.html">Gym <span>23</span></a></li>
								<li><a href="category.html">Hospitals  <span>83</span></a></li>
								<li><a href="category.html">Parolurs <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-shopping-basket icon-bg-4"></i> 
								<h4>Shoppings</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Mens Wears <span>53</span></a></li>
								<li><a href="category.html">Accessories <span>212</span></a></li>
								<li><a href="category.html">Kids Wears <span>133</span></a></li>
								<li><a href="category.html">It & Software <span>143</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-briefcase icon-bg-5"></i> 
								<h4>Jobs</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">It Jobs <span>93</span></a></li>
								<li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
								<li><a href="category.html">Management  <span>183</span></a></li>
								<li><a href="category.html">Voluntary Works <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-6"></i> 
								<h4>Vehicles</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Bus <span>193</span></a></li>
								<li><a href="category.html">Cars <span>23</span></a></li>
								<li><a href="category.html">Motobike  <span>33</span></a></li>
								<li><a href="category.html">Rent a car <span>73</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-paw icon-bg-7"></i> 
								<h4>Pets</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cats <span>65</span></a></li>
								<li><a href="category.html">Dogs <span>23</span></a></li>
								<li><a href="category.html">Birds  <span>113</span></a></li>
								<li><a href="category.html">Others <span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-8"></i> 
								<h4>Services</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cleaning <span>93</span></a></li>
								<li><a href="category.html">Car Washing <span>233</span></a></li>
								<li><a href="category.html">Clothing  <span>183</span></a></li>
								<li><a href="category.html">Business <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
