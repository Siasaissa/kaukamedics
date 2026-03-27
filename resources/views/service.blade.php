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
    <meta name="description" content="Kauka Medical Supplies - Professional medical equipment and healthcare services">
    <!-- Meta Keyword -->
    <meta name="keywords" content="medical equipment, hospital supplies, healthcare services, medical consumables">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Kauka Medics - Our Services</title>
    <!--
			CSS
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
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box" style="padding-top:0 !important; padding-bottom:0 !important;">
                <div class="container">
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
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a href="{{ route('products') }}" class="nav-link">Products</a></li>
                            <li class="nav-item active"><a href="{{ route('service') }}" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
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
                    <h1>Our Services</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="service.html">Services</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Services Grid Section - Professional Horizontal Layout -->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-top-border">
                        <h3 class="mb-30">Delivering Trusted Medical Solutions</h3>
                        <p class="mb-30">We supply a wide range of medical products and equipment designed to meet the needs of healthcare professionals and institutions nationwide. Our commitment to quality ensures that every healthcare facility receives reliable supplies that empower them to save lives every day.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="Medical Equipment">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>Medical Equipment</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>High-quality diagnostic and treatment equipment for hospitals and clinics nationwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="Hospital Consumables">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>Hospital Consumables</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Essential medical supplies including gloves, syringes, bandages, masks and daily consumables.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="Patient Care Products">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>Patient Care Products</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Comfort, safety and monitoring solutions including mobility aids and monitoring devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="Pharmaceutical Supplies">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>Pharmaceutical Supplies</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Trusted pharmaceutical products meeting global safety and efficacy standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="Medical Logistics">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>Medical Logistics</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Efficient distribution network ensuring timely delivery of critical medical supplies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="Hospital Setup">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>Hospital Setup Solutions</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Complete support for new and existing healthcare facilities from planning to installation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Grid Section -->

    <!-- Detailed Services Section -->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <!-- Service 1: Medical Equipment -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Medical</a>
                                        <a class="active" href="#">Equipment</a>
                                        <a href="#">Diagnostics</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Premium Quality<i class="lnr lnr-star"></i></a></li>
                                        <li><a href="#">CE & FDA Approved<i class="lnr lnr-checkmark-circle"></i></a></li>
                                        <li><a href="#">Warranty Included<i class="lnr lnr-shield"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-1.jpg" alt="Medical Equipment">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>State-of-the-Art Medical Equipment</h2>
                                        </a>
                                        <p>We supply high-quality diagnostic and treatment equipment to hospitals and clinics nationwide. From imaging systems to surgical instruments, our products meet global safety standards and deliver reliable performance for healthcare professionals.</p>
                                        <a href="#" class="white_bg_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <!-- Service 2: Hospital Consumables -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Consumables</a>
                                        <a class="active" href="#">Supplies</a>
                                        <a href="#">Essentials</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Daily Supply<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">Bulk Orders<i class="lnr lnr-cart"></i></a></li>
                                        <li><a href="#">Always In Stock<i class="lnr lnr-database"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-2.jpg" alt="Hospital Consumables">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Comprehensive Hospital Consumables</h2>
                                        </a>
                                        <p>From gloves and syringes to bandages and masks — we ensure consistent supply of essential medical items. Our inventory management guarantees that healthcare facilities never face shortages of critical consumables.</p>
                                        <a href="#" class="white_bg_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <!-- Service 3: Patient Care Products -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Patient Care</a>
                                        <a class="active" href="#">Monitoring</a>
                                        <a href="#">Safety</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mobility Aids<i class="lnr lnr-wheelchair"></i></a></li>
                                        <li><a href="#">Monitoring Devices<i class="lnr lnr-chart-bars"></i></a></li>
                                        <li><a href="#">Comfort Solutions<i class="lnr lnr-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-3.jpg" alt="Patient Care Products">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Advanced Patient Care Products</h2>
                                        </a>
                                        <p>Providing comfort and safety with reliable patient care and monitoring solutions. Our range includes mobility aids, pressure care products, and monitoring devices designed to enhance patient outcomes.</p>
                                        <a href="#" class="white_bg_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <!-- Service 4: Pharmaceutical Supplies -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Pharmaceutical</a>
                                        <a class="active" href="#">Medicines</a>
                                        <a href="#">Quality</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">WHO Certified<i class="lnr lnr-certificate"></i></a></li>
                                        <li><a href="#">Authentic Products<i class="lnr lnr-checkmark-circle"></i></a></li>
                                        <li><a href="#">Cold Chain<i class="lnr lnr-snowflake"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-4.jpg" alt="Pharmaceutical Supplies">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Trusted Pharmaceutical Supplies</h2>
                                        </a>
                                        <p>Delivering trusted pharmaceutical products that meet global safety and efficacy standards. We partner with reputable manufacturers to ensure every medication we supply is authentic and effective.</p>
                                        <a href="#" class="white_bg_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <!-- Service 5: Medical Logistics -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Logistics</a>
                                        <a class="active" href="#">Distribution</a>
                                        <a href="#">Delivery</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Fast Delivery<i class="lnr lnr-rocket"></i></a></li>
                                        <li><a href="#">Nationwide<i class="lnr lnr-map"></i></a></li>
                                        <li><a href="#">Real-time Tracking<i class="lnr lnr-location"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-5.jpg" alt="Medical Logistics">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Efficient Medical Logistics Network</h2>
                                        </a>
                                        <p>Efficient distribution network ensuring timely delivery of critical medical supplies across regions. Our logistics team works around the clock to ensure healthcare facilities receive what they need, when they need it.</p>
                                        <a href="#" class="white_bg_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <!-- Service 6: Hospital Setup Solutions -->
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Hospital</a>
                                        <a class="active" href="#">Setup</a>
                                        <a href="#">Solutions</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Consultation<i class="lnr lnr-bubble"></i></a></li>
                                        <li><a href="#">Installation<i class="lnr lnr-wrench"></i></a></li>
                                        <li><a href="#">Staff Training<i class="lnr lnr-graduation-hat"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/blog/main-blog/m-blog-1.jpg" alt="Hospital Setup">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Complete Hospital Setup Solutions</h2>
                                        </a>
                                        <p>Comprehensive support for new and existing healthcare facilities — from planning to full equipment installation. We provide end-to-end services including facility assessment, equipment selection, procurement, installation, and staff training.</p>
                                        <a href="#" class="white_bg_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                <li class="page-item"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Detailed Services Section -->

    <!-- Footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>Kauka Medical Supplies delivers trusted medical products and equipment that empower healthcare professionals to save lives every day.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" novalidate action="#" method="get" class="form-inline">
                                <div class="d-flex flex-row">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" required="" type="email">
                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Contact Info</h6>
                        <p><i class="fa fa-map-marker"></i> Dar es Salaam, Tanzania</p>
                        <p><i class="fa fa-phone"></i> +255 625 726 051</p>
                        <p><i class="fa fa-envelope"></i> info@kaukamedics.com</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://www.facebook.com/ambwenekauka/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/kauka_medical_supplies/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by <a href="#">Kauka Medics</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>