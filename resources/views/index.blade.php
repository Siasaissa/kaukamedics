<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Kauka Company">
    <!-- Meta Description -->
    <meta name="description" content="Kauka Company - Reliable Medical Supplies for a Healthier Tomorrow">
    <!-- Meta Keyword -->
    <meta name="keywords" content="kauka,medics,vifaa tiba,vifaa vya hospitali,afya,bidhaa za dawa, medical equipment, hospital supplies, healthcare, medical products">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Kauka Company - Medical Supplies</title>

    <!-- CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/main.css">
    
    <style>
        /* Ensure carousel items are visible */
        .owl-carousel .owl-item {
            display: block;
        }
        .testimonial-item {
            padding: 20px;
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 1000;
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand -->
                    <a class="navbar-brand logo_h" href="{{ route('index') }}">
                        <img src="img/logo.png" alt="Kauka Company Logo" style="height:60px; width:auto;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ route('cart') }}" class="nav-link"><span class="ti-bag text-primary">{{ session('cart') ? count(session('cart')) : 0 }}</span></a></li>
                            <li class="nav-item">
                                <button class="btn btn-link nav-link p-0 ml-2"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input bg-light py-3" id="search_input_box" style="display:none;">
            <div class="container">
                <form class="d-flex justify-content-between align-items-center">
                    <input type="text" class="form-control w-75" id="search_input" placeholder="Search products...">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <span class="lnr lnr-cross ml-3" id="close_search" title="Close Search" style="cursor:pointer; font-size:20px;"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Banner Area Start -->
    <section class="banner-area" style="margin-top:80px;">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- slide 1 -->
                        <div class="row single-slide align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Reliable Medical <br>Supplies</h1>
                                    <p>We are dedicated to providing high-quality medical equipment and healthcare solutions that empower hospitals, clinics, and professionals to deliver better patient care.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{ route('products') }}"><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Explore Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="img/KAUKA QMPQNI_page-0001.jpg" alt="Medical Equipment">
                                </div>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="row single-slide align-items-center">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Supplying Care, <br>Saving Lives</h1>
                                    <p>From essential hospital tools to advanced diagnostic devices, we ensure reliable access to quality medical supplies that help healthcare providers perform at their best.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{ route('products') }}"><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">View Collection</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="img/kauka company profile  pdf_page-0002.jpg" alt="Healthcare Supplies">
                                </div>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="row single-slide align-items-center">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Quality You <br>Can Trust</h1>
                                    <p>Our mission is to enhance healthcare delivery by providing innovative, affordable, and reliable medical supplies that meet international quality standards.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{ route('about') }}"><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">About Us</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="img/kauka company profile  pdf_page-0003.jpg" alt="Healthcare Professionals">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Features Area Start -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>Certified Products</h6>
                        <p>All products meet international quality standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="">
                        </div>
                        <h6>Reliable Logistics</h6>
                        <p>Efficient distribution network nationwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="">
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Dedicated customer service team</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon4.png" alt="">
                        </div>
                        <h6>Secure Payment</h6>
                        <p>Safe and flexible payment options</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Area End -->

    <!-- Product Area Start -->
    <section class="product-area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Featured Medical Supplies</h1>
                        <p>Discover our selection of high-quality medical products trusted by healthcare professionals.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ $product->image && file_exists(storage_path('app/public/'.$product->image)) ? asset('storage/app/public/'.$product->image) : asset('img/defaultmedical.jpg') }}" alt="{{ $product->name }}">
                        <div class="product-details">
                            <h6>{{ $product->name }}</h6>
                            <div class="price">
                                <h6>TZS {{ number_format($product->price, 0) }}</h6>
                                <h6 class="l-through">TZS {{ number_format($product->price + 100, 0) }}</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="{{ route('add.to.cart', $product->id) }}" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Inquire</p>
                                </a>
                                <a href="#" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Save</p>
                                </a>
                                <a href="#" class="social-info" data-toggle="modal" data-target="#productModal{{ $product->id }}">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Details</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="product-area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Essential Healthcare Items</h1>
                        <p>Reliable supplies for everyday medical needs, always in stock.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products1 as $produ)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ isset($product) && $product->image && file_exists(storage_path('app/public/'.$product->image)) ? asset('storage/app/public/'.$product->image) : asset('img/defaultmedical.jpg') }}" alt="{{ $produ->name }}">
                        <div class="product-details">
                            <h6>{{ $produ->name }}</h6>
                            <div class="price">
                                <h6>TZS {{ number_format($produ->price, 0) }}</h6>
                                <h6 class="l-through">TZS {{ number_format($produ->price + 100, 0) }}</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="{{ route('add.to.cart', $produ->id) }}" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Inquire</p>
                                </a>
                                <a href="#" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Save</p>
                                </a>
                                <a href="#" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Details</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Area End -->

    <!-- Exclusive Deal Area Start -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Our Mission: Quality Healthcare for All</h1>
                            <p>Partner with us to access reliable medical solutions that keep your healthcare facility equipped and efficient.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1>5</h1>
                                    <span class="smalltext">Staff</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1>18</h1>
                                    <span class="smalltext">Years</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1>{{ isset($produc) ? count($produc) : '150' }}</h1>
                                    <span class="smalltext">Products</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1>1500</h1>
                                    <span class="smalltext">Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Learn More About Us</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider owl-carousel">
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/team-3.png" alt="Team">
                            <div class="product-details">
                                <div class="price">
                                    <h6>Professional Team</h6>
                                </div>
                                <h4>Dedicated experts committed to serving your medical supply needs.</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href="#"><span class="ti-user"></span></a>
                                    <span class="add-text text-uppercase">Meet the Team</span>
                                </div>
                            </div>
                        </div>
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/distribution.jpg" alt="Logistics">
                            <div class="product-details">
                                <div class="price">
                                    <h6>Reliable Logistics</h6>
                                </div>
                                <h4>Efficient distribution network ensuring timely delivery.</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href="#"><span class="ti-truck"></span></a>
                                    <span class="add-text text-uppercase">Our Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Exclusive Deal Area End -->

    <!-- Team Members Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h1 class="display-5">Our Team Members</h1>
                    <p class="lead">Meet the dedicated professionals behind Kauka Company</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <img class="card-img-top rounded-circle mx-auto mt-4" src="img/team-1.png" alt="Team Member" style="width:150px; height:150px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">Dr. John Mbeki</h5>
                            <p class="card-text text-muted">Medical Director</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-info mx-1"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary mx-1"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <img class="card-img-top rounded-circle mx-auto mt-4" src="img/team-2.png" alt="Team Member" style="width:150px; height:150px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">Sarah Kimambo</h5>
                            <p class="card-text text-muted">Procurement Manager</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-info mx-1"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary mx-1"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <img class="card-img-top rounded-circle mx-auto mt-4" src="img/team-3.png" alt="Team Member" style="width:150px; height:150px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">Michael Ochieng</h5>
                            <p class="card-text text-muted">Logistics Coordinator</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-info mx-1"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary mx-1"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <img class="card-img-top rounded-circle mx-auto mt-4" src="img/team-2.png" alt="Team Member" style="width:150px; height:150px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">Grace Mwangi</h5>
                            <p class="card-text text-muted">Customer Relations</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-info mx-1"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-secondary mx-1"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Members End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="testimonial-title">
                        <h1 class="display-6 mb-4">What Our Clients Say</h1>
                        <p class="fs-5 mb-0">We're proud to be a trusted partner in delivering reliable medical equipment and healthcare solutions nationwide.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="owl-carousel testimonial-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/team-1.png" alt="Dr. Henry Mwenda">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">"Their medical supplies are of exceptional quality. Our hospital has greatly benefited from their quick service and dependable products."</p>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-light text-secondary p-3 rounded-circle mr-3">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Dr. Henry Mwenda</h5>
                                                <span class="text-muted">Medical Director, CityCare Hospital</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/team-2.png" alt="Sarah John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">"We've partnered with them for over three years. Their professionalism and commitment to healthcare delivery are unmatched."</p>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-light text-secondary p-3 rounded-circle mr-3">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Sarah John</h5>
                                                <span class="text-muted">Procurement Officer, Meditech Labs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>We are dedicated to providing high-quality medical equipment and healthcare solutions that empower hospitals, clinics, and professionals.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <form action="#" method="get" class="form-inline">
                            <div class="d-flex flex-row">
                                <input class="form-control" name="EMAIL" placeholder="Enter Email" type="email">
                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instagram Feed</h6>
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
                <p class="footer-text m-0">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kauka Company
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize banner carousel
            $('.active-banner-slider').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 1000
            });
            
            // Initialize testimonial carousel - THIS MAKES TESTIMONIALS APPEAR
            $('.testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 6000,
                smartSpeed: 800,
                margin: 30
            });
            
            // Initialize exclusive product slider
            $('.active-exclusive-product-slider').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 4000,
                smartSpeed: 800
            });
            
            // Search functionality
            $('#search').click(function() {
                $('#search_input_box').slideToggle();
            });
            
            $('#close_search').click(function() {
                $('#search_input_box').slideUp();
            });
            
            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });
            
            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 300);
            });
        });
    </script>

    <!-- Video modal script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('video');
            const modal = document.getElementById('videoModal');
            if (modal) {
                modal.addEventListener('hidden.bs.modal', function () {
                    if (video) {
                        video.pause();
                        video.currentTime = 0;
                    }
                });
            }
        });
    </script>
</body>
</html>