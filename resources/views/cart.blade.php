<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box" style="padding-top:0 !important; padding-bottom:0 !important;">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#" style="padding:0 !important; margin:0 !important; line-height:0 !important;">
                        <img src="img/logo.png" 
                            alt="Kauka Company Logo" 
                            style="height:100px !important; padding:0 !important; margin:0 !important; display:block;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>

                            <li class="nav-item active">
                                <a href="{{ route('products') }}" class="nav-link dropdown-toggle" >Products</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="{{ route('service') }}" class="nav-link dropdown-toggle" >Services</a>
                                
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link dropdown-toggle" >About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}" class="nav-link dropdown-toggle" >Contact</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="{{ route('cart') }}" class="cart"><span class="ti-bag text-primary">{{ session('cart') ? count(session('cart')) : 0 }}</span></a></li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search products...">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $grandTotal = 0; @endphp
                        @if(!empty($cart) && count($cart) > 0)
                            @foreach($cart as $id => $item)
                                @php
                                    $qty = isset($item['quantity']) ? (int)$item['quantity'] : 1;
                                    $price = isset($item['price']) ? (float)$item['price'] : 0;
                                    $lineTotal = $price * $qty;
                                    $grandTotal += $lineTotal;

                                    // Resolve image url
                                    $imageUrl = asset('img/defaultmedical.jpg');
                                    if(!empty($item['image'])){
                                        $normalized = ltrim(str_replace(['storage/app/public/', 'storage/'], '', $item['image']), '/');
                                        if(Str::startsWith($item['image'], ['http://','https://'])){
                                            $imageUrl = $item['image'];
                                        } elseif(file_exists(storage_path('app/public/' . $normalized))){
                                            $imageUrl = asset('storage/app/public/' . $normalized);
                                        } elseif(file_exists(public_path($item['image']))){
                                            $imageUrl = asset($item['image']);
                                        }
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ $imageUrl }}" alt="{{ $item['name'] ?? 'Product' }}" style="width:80px; height:80px; object-fit:contain;">
                                            </div>
                                            <div class="media-body pl-3">
                                                <p>{{ $item['name'] ?? 'Product' }}</p>
                                                @if(!empty($item['notes']))
                                                    <small class="text-muted">{{ $item['notes'] }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>TZS {{ number_format($price, 2) }}</h5>
                                    </td>
                                    <td>
                                        <form action="{{ route('update.cart', $id) }}" method="POST" class="d-flex align-items-center">
                                            @csrf
                                            <input type="number" name="quantity" value="{{ $qty }}" min="1" class="form-control" style="width:80px; margin-right:8px;">
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Update</button>
                                        </form>
                                    </td>
                                    <td>
                                        <h5>TZS {{ number_format($lineTotal, 2) }}</h5>
                                        <div class="mt-2">
                                            <a href="{{ route('remove.from.cart', $id) }}" class="text-danger" onclick="return confirm('Remove this item from cart?')">Remove</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- summary rows -->
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="{{ url('/') }}">Continue Shopping</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="primary-btn" href="#">Apply</a>
                                        <a class="gray_btn" href="#">Close Coupon</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>TZS {{ number_format($grandTotal, 2) }}</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: TZS 5,000</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: TZS 10,000</a></li>
                                            <li class="active"><a href="#">Local Delivery: TZS 2,000</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="1">Tanzania</option>
                                            <option value="2">Kenya</option>
                                            <option value="4">Uganda</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Select a Region</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="{{ url('/') }}">Continue Shopping</a>
                                        <a class="primary-btn" href="{{ route('checkout') }}">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>

                        @else
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <h5>Your cart is empty.</h5>
                                    <p><a href="{{ route('products') }}" class="btn btn-primary mt-3">Browse Products</a></p>
                                </td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>