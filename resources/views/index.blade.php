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
    <meta name="keywords" content="medical equipment, hospital supplies, healthcare, medical products">
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
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#"><img src="img/logo.png" alt="Kauka Company Logo" style="height: 100px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Products</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">Medical Equipment</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Hospital Consumables</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Patient Care</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Pharmaceuticals</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Services</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">Medical Logistics</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Hospital Setup</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Equipment Maintenance</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">About Us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Our Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">News & Events</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    {{ session('cart') ? count(session('cart')) : 0 }}
</span>
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
    <section class="banner-area">
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
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c1.jpg" alt="Medical Equipment">
                                <a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Medical Equipment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c2.jpg" alt="Hospital Consumables">
                                <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Hospital Consumables</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c3.jpg" alt="Patient Care Products">
                                <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Patient Care Products</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c4.jpg" alt="Pharmaceutical Supplies">
                                <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
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
                        <img class="img-fluid w-100" src="img/category/c5.jpg" alt="Medical Logistics">
                        <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Medical Logistics</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <img class="img-fluid" src="img/product/p1.jpg" alt="Diagnostic Tool">
                            <div class="product-details">
                                <h6>Advanced Diagnostic Stethoscope</h6>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="#" class="social-info">
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
                            <img class="img-fluid" src="img/product/p5.jpg" alt="Protective Mask">
                            <div class="product-details">
                                <h6>N95 Protective Masks (Box of 50)</h6>
                                <div class="price">
                                    <h6>$45.00</h6>
                                    <h6 class="l-through">$55.00</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="#" class="social-info">
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

    <!-- Start exclusive deal Area (About / Mission) -->
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
                                    <h1 class="days">120</h1>
                                    <span class="smalltext">Staff</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">25</h1>
                                    <span class="smalltext">Years</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">3000</h1>
                                    <span class="smalltext">Products</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">1500</h1>
                                    <span class="smalltext">Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Learn More About Us</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/product/e-p1.png" alt="Team">
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
                            <img class="img-fluid" src="img/product/e-p1.png" alt="Logistics">
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
    <!-- End exclusive deal Area -->

    <!-- Start Video / Company Overview (from provided content) -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-11">
                    <div class="h-100 py-5 d-flex align-items-center">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="img/video1.mp4" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h3 class="ms-5 mb-0 text-white">Delivering trusted medical supplies that empower healthcare professionals to save lives every day.</h3>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-1">
                    <div class="h-100 w-100 bg-secondary d-flex align-items-center justify-content-center">
                        <span class="text-white" style="transform: rotate(-90deg);">Scroll Down</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Company Overview Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <video id="video" class="w-100 rounded" controls autoplay muted>
                            <source src="img/video1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->

    <!-- Start brand Area (Partner Brands) -->
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
    </section>
    <!-- End brand Area -->

    <!-- Start related-product Area (Deals of the Week / Latest News) -->
    <section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest News & Events</h1>
                        <p>Stay updated with our participation in medical exhibitions and latest offerings.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/r1.jpg" alt="Event"></a>
                                <div class="desc">
                                    <a href="#" class="title">Medical Expo 2025</a>
                                    <p>March 10-15, Dar es Salaam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/r2.jpg" alt="News"></a>
                                <div class="desc">
                                    <a href="#" class="title">New Product Launch</a>
                                    <p>Advanced patient monitors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/r3.jpg" alt="Training"></a>
                                <div class="desc">
                                    <a href="#" class="title">Staff Training</a>
                                    <p>Equipment handling session</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/r5.jpg" alt="Partnership"></a>
                                <div class="desc">
                                    <a href="#" class="title">New Partnership</a>
                                    <p>With leading global supplier</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/r6.jpg" alt="Community"></a>
                                <div class="desc">
                                    <a href="#" class="title">Health Campaign</a>
                                    <p>Free check-up initiative</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/r7.jpg" alt="Award"></a>
                                <div class="desc">
                                    <a href="#" class="title">Industry Award</a>
                                    <p>Best Medical Supplier 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="Advertisement">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End related-product Area -->

    <!-- Testimonial Start (from provided content) -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="testimonial-title">
                        <h1 class="display-6 mb-4">What Our Clients Say</h1>
                        <p class="fs-5 mb-0">We’re proud to be a trusted partner in delivering reliable medical equipment and healthcare solutions nationwide.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/team-1.png" alt="Client">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">Their medical supplies are of exceptional quality. Our hospital has greatly benefited from their quick service and dependable products.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Dr. Henry Mwenda</h5>
                                                <span>Medical Director, CityCare Hospital</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="img/team-2.png" alt="Client">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                        </div>
                                        <p class="fs-5">We’ve partnered with them for over three years. Their professionalism and commitment to healthcare delivery are unmatched.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                                <i class="fa fa-quote-right fa-2x"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5 class="mb-0">Sarah John</h5>
                                                <span>Procurement Officer, Meditech Labs</span>
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
                <div class="col-lg-4  col-md-6 col-sm-6">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Google Maps (optional) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>

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