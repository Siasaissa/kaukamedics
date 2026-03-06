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
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
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
                                    <img class="img-fluid" src="img/banner/medical-1.jpg" alt="Medical Equipment">
                                </div>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="row single-slide align-items-center">
                            <div class="col-lg-5 col-md-6">
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
                                    <img class="img-fluid" src="img/banner/medical-2.jpg" alt="Healthcare Supplies">
                                </div>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="row single-slide align-items-center">
                            <div class="col-lg-5 col-md-6">
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
                                    <img class="img-fluid" src="img/banner/medical-3.jpg" alt="Healthcare Professionals">
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
                            <img src="img/features/f-icon1.png" alt="Certified">
                        </div>
                        <h6>Certified Products</h6>
                        <p>All products meet international quality standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="Logistics">
                        </div>
                        <h6>Reliable Logistics</h6>
                        <p>Efficient distribution network nationwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="Support">
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Dedicated customer service team</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon4.png" alt="Payment">
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
                        <img class="img-fluid" src="{{ $product->image && file_exists(public_path('storage/'.$product->image)) ? asset('storage/'.$product->image) : asset('img/products/default.jpg') }}" alt="{{ $product->name }}">
                        <div class="product-details">
                            <h6>{{ $product->name }}</h6>
                            <div class="price">
                                <h6>TZS {{ number_format($product->price, 0) }}</h6>
                                @if(isset($product->compare_price))
                                <h6 class="l-through">TZS {{ number_format($product->compare_price, 0) }}</h6>
                                @endif
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
            
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Essential Healthcare Items</h1>
                        <p>Reliable supplies for everyday medical needs, always in stock.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products1 as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="{{ $product->image && file_exists(public_path('storage/'.$product->image)) ? asset('storage/'.$product->image) : asset('img/products/default.jpg') }}" alt="{{ $product->name }}">
                        <div class="product-details">
                            <h6>{{ $product->name }}</h6>
                            <div class="price">
                                <h6>TZS {{ number_format($product->price, 0) }}</h6>
                                @if(isset($product->compare_price))
                                <h6 class="l-through">TZS {{ number_format($product->compare_price, 0) }}</h6>
                                @endif
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

    <!-- Mission/Stats Area Start -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec">
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
                                    <h1>{{ $productCount ?? '150+' }}</h1>
                                    <span class="smalltext">Products</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1>1500</h1>
                                    <span class="smalltext">Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="primary-btn">Learn More About Us</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider owl-carousel">
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/team/team-1.jpg" alt="Our Team">
                            <div class="product-details">
                                <h4>Professional Team</h4>
                                <p>Dedicated experts committed to serving your medical supply needs.</p>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href="{{ route('about') }}"><span class="ti-user"></span></a>
                                    <span class="add-text text-uppercase">Meet the Team</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/logistics.jpg" alt="Our Logistics">
                            <div class="product-details">
                                <h4>Reliable Logistics</h4>
                                <p>Efficient distribution network ensuring timely delivery.</p>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href="{{ route('service') }}"><span class="ti-truck"></span></a>
                                    <span class="add-text text-uppercase">Our Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mission/Stats Area End -->

    <!-- Team/News Area Start -->
    <section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title mt-5">
                        <h1>Latest Updates</h1>
                        <p>News and events from Kauka Medics</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/news/event-1.jpg" alt="Medical Expo" style="width:80px; height:80px; object-fit:cover;"></a>
                                <div class="desc">
                                    <a href="#" class="title">Medical Expo 2025</a>
                                    <p>March 10-15, Dar es Salaam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/news/product-launch.jpg" alt="New Product" style="width:80px; height:80px; object-fit:cover;"></a>
                                <div class="desc">
                                    <a href="#" class="title">New Product Launch</a>
                                    <p>Advanced patient monitors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/news/training.jpg" alt="Training" style="width:80px; height:80px; object-fit:cover;"></a>
                                <div class="desc">
                                    <a href="#" class="title">Staff Training</a>
                                    <p>Equipment handling session</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="img/news/partnership.jpg" alt="Partnership" style="width:80px; height:80px; object-fit:cover;"></a>
                                <div class="desc">
                                    <a href="#" class="title">New Partnership</a>
                                    <p>With leading global supplier</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid" src="img/logo.png" alt="Kauka Company">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team/News Area End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="testimonial-title">
                        <h1 class="display-6 mb-4">What Our Clients Say</h1>
                        <p class="fs-5 mb-0">We're proud to be a trusted partner in delivering reliable medical equipment and healthcare solutions nationwide.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid rounded-circle" src="img/testimonials/client-1.jpg" alt="Dr. Henry Mwenda">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <p class="fs-5">"Their medical supplies are of exceptional quality. Our hospital has greatly benefited from their quick service and dependable products."</p>
                                        <h5 class="mb-0">Dr. Henry Mwenda</h5>
                                        <span>Medical Director, CityCare Hospital</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid rounded-circle" src="img/testimonials/client-2.jpg" alt="Sarah John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text">
                                        <div class="mb-2">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <p class="fs-5">"We've partnered with them for over three years. Their professionalism and commitment to healthcare delivery are unmatched."</p>
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
                        <p>Stay updated with our latest</p>
                        <form action="#" method="post" class="form-inline">
                            <div class="d-flex flex-row">
                                <input class="form-control" name="EMAIL" placeholder="Enter Email" type="email">
                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Contact Info</h6>
                        <p><i class="fa fa-map-marker"></i> Dar es Salaam, Tanzania</p>
                        <p><i class="fa fa-phone"></i> +255 123 456 789</p>
                        <p><i class="fa fa-envelope"></i> info@kaukacompany.com</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    Copyright &copy; {{ date('Y') }} All rights reserved | Kauka Company
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize carousels
            $('.active-banner-slider').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false
            });
            
            $('.testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false
            });
            
            $('.active-exclusive-product-slider').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false
            });
            
            // Search functionality
            $('#search').click(function() {
                $('#search_input_box').toggle();
            });
            
            $('#close_search').click(function() {
                $('#search_input_box').hide();
            });
        });
    </script>
</body>
</html>