@include('layouts.head')

<body>
   @include('layouts.topbar')


    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                    <li class="breadcrumb-item"><a href="#!">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


     <!-- Video Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-11">
                <div class="h-100 py-5 d-flex align-items-center">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="{{asset('img/video3.mp4')}}" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h3 class="ms-5 mb-0">Delivering trusted medical supplies that empower healthcare professionals to save lives every day.</h3>
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

    <!-- Video End -->


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
                        <source src="{{ asset('img/video3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Video Modal End -->


    <!-- Service Start -->
   <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-title">
                    <h1 class="display-6 mb-4">What We Offer</h1>
                    <p class="fs-5 mb-0">
                        We supply a wide range of medical products and equipment designed to meet the needs of healthcare professionals and institutions.
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row g-5">
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-stethoscope fa-2x text-secondary"></i>
                            </div>
                            <h3>Medical Equipment</h3>
                            <p class="mb-2">
                                Supplying high-quality diagnostic and treatment equipment to hospitals and clinics nationwide.
                            </p>
                            <a href="#!">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-kit-medical fa-2x text-secondary"></i>
                            </div>
                            <h3>Hospital Consumables</h3>
                            <p class="mb-2">
                                From gloves and syringes to bandages and masks — we ensure consistent supply of essential medical items.
                            </p>
                            <a href="#!">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-heart-pulse fa-2x text-secondary"></i>
                            </div>
                            <h3>Patient Care Products</h3>
                            <p class="mb-2">
                                Providing comfort and safety with reliable patient care and monitoring solutions.
                            </p>
                            <a href="#!">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-pills fa-2x text-secondary"></i>
                            </div>
                            <h3>Pharmaceutical Supplies</h3>
                            <p class="mb-2">
                                Delivering trusted pharmaceutical products that meet global safety and efficacy standards.
                            </p>
                            <a href="#!">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-truck-medical fa-2x text-secondary"></i>
                            </div>
                            <h3>Medical Logistics</h3>
                            <p class="mb-2">
                                Efficient distribution network ensuring timely delivery of critical medical supplies across regions.
                            </p>
                            <a href="#!">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-hospital fa-2x text-secondary"></i>
                            </div>
                            <h3>Hospital Setup Solutions</h3>
                            <p class="mb-2">
                                Comprehensive support for new and existing healthcare facilities — from planning to full equipment installation.
                            </p>
                            <a href="#!">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Service End -->


    
    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="testimonial-title">
                    <h1 class="display-6 mb-4">What Our Clients Say About Us</h1>
                    <p class="fs-5 mb-0">We’re proud to be a trusted partner in delivering reliable medical equipment and healthcare solutions nationwide.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('img/team-1.png')}}" alt="">
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
                                    <img class="img-fluid" src="{{asset('img/team-2.png')}}" alt="">
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
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('img/team-3.png')}}" alt="">
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
                                    <p class="fs-5">Thanks to their efficient delivery and reliable products, our clinic operations have become smoother and more effective.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">Dr. Kelvin Chacha</h5>
                                            <span>Head of Clinic Operations, LifePoint Health</span>
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
   @include('layouts.footer')
 <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@include('layouts.links')
</body>

</html>