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
                        <img src="img/logo.png" alt="Kauka Company Logo" class="img-fluid" style="height:60px; width:auto;">
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
                                <button class="btn btn-link nav-link"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input bg-light py-3" id="search_input_box" style="display:none;">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search products...">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <span class="lnr lnr-cross align-self-center ml-3" id="close_search" title="Close Search" style="cursor:pointer;"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Banner Area Start -->
    <section class="bg-light py-5" style="margin-top:80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- slide 1 -->
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="p-4">
                                    <h1 class="display-4">Reliable Medical <br>Supplies</h1>
                                    <p class="lead">We are dedicated to providing high-quality medical equipment and healthcare solutions that empower hospitals, clinics, and professionals to deliver better patient care.</p>
                                    <div class="mt-4">
                                        <a class="btn btn-primary btn-lg" href="{{ route('products') }}">Explore Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="text-center">
                                    <img class="img-fluid" src="img/KAUKA QMPQNI_page-0001.jpg" alt="Medical Equipment">
                                </div>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="p-4">
                                    <h1 class="display-4">Supplying Care, <br>Saving Lives</h1>
                                    <p class="lead">From essential hospital tools to advanced diagnostic devices, we ensure reliable access to quality medical supplies that help healthcare providers perform at their best.</p>
                                    <div class="mt-4">
                                        <a class="btn btn-primary btn-lg" href="{{ route('products') }}">View Collection</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="text-center">
                                    <img class="img-fluid" src="img/kauka company profile  pdf_page-0002.jpg" alt="Healthcare Supplies">
                                </div>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="p-4">
                                    <h1 class="display-4">Quality You <br>Can Trust</h1>
                                    <p class="lead">Our mission is to enhance healthcare delivery by providing innovative, affordable, and reliable medical supplies that meet international quality standards.</p>
                                    <div class="mt-4">
                                        <a class="btn btn-primary btn-lg" href="{{ route('about') }}">About Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="text-center">
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
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="text-center p-4 border rounded">
                        <div class="mb-3">
                            <img src="img/features/f-icon1.png" alt="Certified" class="img-fluid">
                        </div>
                        <h5>Certified Products</h5>
                        <p class="text-muted">All products meet international quality standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="text-center p-4 border rounded">
                        <div class="mb-3">
                            <img src="img/features/f-icon2.png" alt="Logistics" class="img-fluid">
                        </div>
                        <h5>Reliable Logistics</h5>
                        <p class="text-muted">Efficient distribution network nationwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="text-center p-4 border rounded">
                        <div class="mb-3">
                            <img src="img/features/f-icon3.png" alt="Support" class="img-fluid">
                        </div>
                        <h5>24/7 Support</h5>
                        <p class="text-muted">Dedicated customer service team</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="text-center p-4 border rounded">
                        <div class="mb-3">
                            <img src="img/features/f-icon4.png" alt="Payment" class="img-fluid">
                        </div>
                        <h5>Secure Payment</h5>
                        <p class="text-muted">Safe and flexible payment options</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Area End -->

    <!-- Product Area Start -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h1 class="display-5">Featured Medical Supplies</h1>
                    <p class="lead">Discover our selection of high-quality medical products trusted by healthcare professionals.</p>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img class="card-img-top img-fluid" src="{{ $product->image && file_exists(storage_path('app/public/'.$product->image)) ? asset('storage/app/public/'.$product->image) : asset('img/defaultmedical.jpg') }}" alt="{{ $product->name }}" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="h6 text-primary">TZS {{ number_format($product->price, 0) }}</span>
                                    @if(isset($product->compare_price))
                                    <span class="text-muted ml-2"><del>TZS {{ number_format($product->compare_price, 0) }}</del></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-outline-primary btn-sm">
                                    <span class="ti-bag"></span> Inquire
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm">
                                    <span class="lnr lnr-heart"></span>
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#productModal{{ $product->id }}">
                                    <span class="lnr lnr-move"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="row justify-content-center my-5">
                <div class="col-lg-6 text-center">
                    <h1 class="display-5">Essential Healthcare Items</h1>
                    <p class="lead">Reliable supplies for everyday medical needs, always in stock.</p>
                </div>
            </div>
            <div class="row">
                @foreach($products1 as $produ)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img class="card-img-top img-fluid" src="{{ $product->image && file_exists(storage_path('app/public/'.$product->image)) ? asset('storage/app/public/'.$product->image) : asset('img/defaultmedical.jpg') }}" alt="{{ $produ->name }}" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produ->name }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="h6 text-primary">TZS {{ number_format($produ->price, 0) }}</span>
                                    @if(isset($produ->compare_price))
                                    <span class="text-muted ml-2"><del>TZS {{ number_format($produ->compare_price, 0) }}</del></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('add.to.cart', $produ->id) }}" class="btn btn-outline-primary btn-sm">
                                    <span class="ti-bag"></span> Inquire
                                </a>
                                <a href="#" class="btn btn-outline-danger btn-sm">
                                    <span class="lnr lnr-heart"></span>
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    <span class="lnr lnr-move"></span>
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
    <section class="py-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 p-5 bg-primary text-white">
                    <div class="p-4">
                        <h1 class="display-5 text-white">Our Mission: Quality Healthcare for All</h1>
                        <p class="lead text-white">Partner with us to access reliable medical solutions that keep your healthcare facility equipped and efficient.</p>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col-3">
                            <h2 class="text-white">5</h2>
                            <span>Staff</span>
                        </div>
                        <div class="col-3">
                            <h2 class="text-white">18</h2>
                            <span>Years</span>
                        </div>
                        <div class="col-3">
                            <h2 class="text-white">{{ isset($produc) ? count($produc) : '150+' }}</h2>
                            <span>Products</span>
                        </div>
                        <div class="col-3">
                            <h2 class="text-white">1500</h2>
                            <span>Clients</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('about') }}" class="btn btn-light btn-lg">Learn More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="active-exclusive-product-slider owl-carousel">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-3.png" alt="Our Team" style="height:500px; object-fit:cover;">
                            <div class="position-absolute bottom-0 w-100 p-4 bg-dark text-white bg-opacity-75">
                                <h4>Professional Team</h4>
                                <p>Dedicated experts committed to serving your medical supply needs.</p>
                                <a href="{{ route('about') }}" class="btn btn-outline-light">Meet the Team</a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/distribution.jpg" alt="Our Logistics" style="height:500px; object-fit:cover;">
                            <div class="position-absolute bottom-0 w-100 p-4 bg-dark text-white bg-opacity-75">
                                <h4>Reliable Logistics</h4>
                                <p>Efficient distribution network ensuring timely delivery.</p>
                                <a href="{{ route('service') }}" class="btn btn-outline-light">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mission/Stats Area End -->

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

    <!-- News/Events Area Start -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h1 class="display-5">Latest News & Events</h1>
                    <p class="lead">Stay updated with Kauka Medics</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="img/team-1.jpeg" class="card-img-top" alt="Medical Expo" style="height:150px; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Medical Expo 2025</h5>
                                    <p class="card-text text-muted">March 10-15, Dar es Salaam</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="img/team-2.jpeg" class="card-img-top" alt="Product Launch" style="height:150px; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title">New Product Launch</h5>
                                    <p class="card-text text-muted">Advanced patient monitors</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="img/team-3.jpeg" class="card-img-top" alt="Staff Training" style="height:150px; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Staff Training</h5>
                                    <p class="card-text text-muted">Equipment handling session</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="img/team-3.png" class="card-img-top" alt="Partnership" style="height:150px; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title">New Partnership</h5>
                                    <p class="card-text text-muted">With leading global supplier</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <img class="card-img-top" src="img/logo.png" alt="Kauka Company">
                        <div class="card-body text-center">
                            <h5 class="card-title">Partner With Us</h5>
                            <p class="card-text">Join our network of healthcare providers</p>
                            <a href="#" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News/Events End -->

    <!-- Testimonial Start -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-4 mb-4">
                    <h1 class="display-5">What Our Clients Say</h1>
                    <p class="lead">We're proud to be a trusted partner in delivering reliable medical equipment and healthcare solutions nationwide.</p>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="card border-0 shadow p-4">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <img class="img-fluid rounded-circle mb-3" src="img/team-1.png" alt="Client" style="width:120px; height:120px; object-fit:cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-2 text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="lead">"Their medical supplies are of exceptional quality. Our hospital has greatly benefited from their quick service and dependable products."</p>
                                    <h5 class="mb-0">Dr. Henry Mwenda</h5>
                                    <span class="text-muted">Medical Director, CityCare Hospital</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow p-4">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <img class="img-fluid rounded-circle mb-3" src="img/team-2.png" alt="Client" style="width:120px; height:120px; object-fit:cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-2 text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="lead">"We've partnered with them for over three years. Their professionalism and commitment to healthcare delivery are unmatched."</p>
                                    <h5 class="mb-0">Sarah John</h5>
                                    <span class="text-muted">Procurement Officer, Meditech Labs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-white">About Us</h5>
                    <p class="text-white-50">We are dedicated to providing high-quality medical equipment and healthcare solutions that empower hospitals, clinics, and professionals.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-white">Newsletter</h5>
                    <p class="text-white-50">Stay updated with our latest</p>
                    <form action="#" method="post" class="form-inline">
                        <div class="input-group">
                            <input class="form-control" name="EMAIL" placeholder="Enter Email" type="email">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fa fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-white">Contact Info</h5>
                    <ul class="list-unstyled text-white-50">
                        <li><i class="fa fa-map-marker mr-2"></i> Dar es Salaam, Tanzania</li>
                        <li><i class="fa fa-phone mr-2"></i> +255 123 456 789</li>
                        <li><i class="fa fa-envelope mr-2"></i> info@kaukacompany.com</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="text-white">Follow Us</h5>
                    <p class="text-white-50">Let us be social</p>
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-light btn-sm mr-2"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm mr-2"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm mr-2"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="text-white-50 mb-0">
                        Copyright &copy; {{ date('Y') }} All rights reserved | Kauka Company
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg back-to-top" style="position:fixed; bottom:20px; right:20px; display:none;"><i class="fa fa-arrow-up"></i></a>

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
                nav: false,
                autoplay: true,
                autoplayTimeout: 5000
            });
            
            $('.testimonial-carousel').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 6000
            });
            
            $('.active-exclusive-product-slider').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 4000
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
</body>
</html>