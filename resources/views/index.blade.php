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

    <!--
		CSS
		============================================= -->
    <!-- Bootstrap & Main Styles -->
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
    <!-- Additional CSS for medical theme (can be merged into main.css) -->
    
</head>

<body>

    <!-- Topbar Start (from includes) -->
    <!-- Topbar placeholder - replace with actual topbar content -->
    <div class="topbar-area">
        <!-- Topbar content here -->
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start (integrated with header area) -->
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
                            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="{{ route('products') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Products</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="{{ route('service') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Services</a>
                                
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="{{ route('about') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">About Us</a>
                                
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
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
    <!-- Navbar End -->

    <!-- start banner Area (Carousel Start) -->
    <section class="banner-area" style="margin-top:100px;">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide 1 -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Reliable Medical <br>Supplies</h1>
                                    <p>We are dedicated to providing high-quality medical equipment and healthcare solutions that empower hospitals, clinics, and professionals to deliver better patient care.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="#"><span class="lnr lnr-cross "></span></a>
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
                        <!-- single-slide 2 -->
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Supplying Care, <br>Saving Lives</h1>
                                    <p>From essential hospital tools to advanced diagnostic devices, we ensure reliable access to quality medical supplies that help healthcare providers perform at their best.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="#"><span class="lnr lnr-cross"></span></a>
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
                        <!-- single-slide 3 -->
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Quality You <br>Can Trust</h1>
                                    <p>Our mission is to enhance healthcare delivery by providing innovative, affordable, and reliable medical supplies that meet international quality standards.</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="#"><span class="lnr lnr-cross"></span></a>
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
    <!-- End banner Area -->

    <!-- start features Area (Why Choose Us / Features) -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>Certified Products</h6>
                        <p>All products meet international quality standards</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="">
                        </div>
                        <h6>Reliable Logistics</h6>
                        <p>Efficient distribution network nationwide</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="">
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Dedicated customer service team</p>
                    </div>
                </div>
                <!-- single features -->
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
    <!-- end features Area -->

    <!-- Start category Area (What We Offer / Services) -->
    <!--<section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/medicalequipment.jpg" alt="Medical Equipment">
                                <a href="img/medicalequipment.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Medical Equipment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/Hospital_consumable.jpg" alt="Hospital Consumables">
                                <a href="img/Hospital_consumable.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Hospital Consumables</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/patient_care.jpg" alt="Patient Care Products">
                                <a href="img/patient_care.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Patient Care Products</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/pharmaceutical_supplies.jpg" alt="Pharmaceutical Supplies">
                                <a href="img/pharmaceutical_supplies.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Pharmaceutical Supplies</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="img/logo.png" alt="Medical Logistics">
                        <a href="img/logo.png" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Medical Logistics</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End category Area -->

    <!-- start product Area (Our Products) -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide - Featured Products -->
        <div class="single-product-slider">
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
                    <!-- single product -->
                     @foreach ( $products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ $product->image && file_exists(storage_path('app/public/'.$product->image)) 
                            ? asset('storage/app/public/'.$product->image) 
                            : asset('img/defaultmedical.jpg') }}" alt="Diagnostic Tool">
                            <div class="product-details">
                                <h6>{{ $product->name }}</h6>
                                <div class="price">
                                    <h6>{{ number_format($product->price, 2)}}</h6>
                                    <h6 class="l-through">{{ number_format( $product->price +100, 2)  }}</h6>
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
                                    <a href="#" class="social-info" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">Details</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     @endforeach
                    <!-- single product -->
                    
                </div>
            </div>
        </div>
        <!-- single product slide - More Products -->
        <div class="single-product-slider">
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
                    <!-- single product -->
                     @foreach ($products1 as $produ)

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ $product->image && file_exists(storage_path('app/public/'.$product->image)) 
                     ? asset('storage/app/public/'.$product->image) 
                     : asset('img/defaultmedical.jpg') }}" alt="Protective Mask">
                            <div class="product-details">
                                <h6>{{ $produ->name }}</h6>
                                <div class="price">
                                    <h6>{{ number_format( $produ->price, 2) }}</h6>
                                    <h6 class="l-through">{{ number_format( $produ->price +100, 2) }}</h6>
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
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">Compare</p>
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
                    <!-- single product -->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->

    <!-- Start exclusive deal Area (About / Mission) 
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
                                    <h1>{{count( $produc )}}</h1>
                                    <span class="smalltext">Products</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 >1500</h1>
                                    <span class="smalltext">Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Learn More About Us</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                        <!-- single exclusive carousel 
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
                        <!-- single exclusive carousel 
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
    </section>-->
    <!-- End exclusive deal Area -->

    <!-- Start brand Area (Partner Brands) 
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="Partner">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="Partner">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="Partner">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="Partner">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="Partner">
                </a>
            </div>
        </div>
    </section>-->
    <!-- End brand Area -->

    <!-- Team Members Section (NEW) -->
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
                                    <img class="img-fluid" src="img/team-1.jpg" alt="Dr. Henry Mwenda" style="height: 250px; object-fit: cover;">
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
                                    <img class="img-fluid" src="img/team-1.jpg" alt="Sarah John" style="height: 250px; object-fit: cover;">
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
    <!-- Footer Start (from includes) -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            We are dedicated to providing high-quality medical equipment and healthcare solutions that empower hospitals, clinics, and professionals.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7  col-md-12 col-sm-12">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="#" method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
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