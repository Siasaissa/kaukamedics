@include('layouts.head')

<body>
    @include('layouts.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                    <li class="breadcrumb-item"><a href="#!">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                        data-src="{{asset('img/video2.mp4')}}" data-bs-target="#videoModal">
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
                        <source src="{{ asset('img/video2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="about-img">
                    <img class="img-fluid w-100" src="{{asset('img/about.jpg')}}" alt="About Medical Supplies Company">
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Delivering Quality Healthcare Solutions</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">
                    We are a trusted provider of medical equipment, hospital supplies, and healthcare solutions 
                    dedicated to improving the quality of care across hospitals, clinics, and medical institutions. 
                    Our goal is to make reliable medical products accessible to those who save lives every day.
                </p>
                <div class="row g-4 pt-2">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="h-100">
                            <h3>Our Mission</h3>
                            <p>
                                To enhance healthcare delivery by providing innovative, affordable, and reliable 
                                medical supplies that meet international quality standards.
                            </p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Ensuring quality and reliability in every product.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Partnering with healthcare providers to improve outcomes.</p>
                            <p class="text-dark mb-0"><i class="fa fa-check text-primary me-2"></i>Committed to advancing medical care across Africa.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-primary p-4 text-center">
                            <p class="fs-5 text-dark">
                                Partner with us to access reliable medical solutions that keep your healthcare facility equipped and efficient.
                            </p>
                            <a class="btn btn-secondary py-2 px-4" href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- About End -->


    <!-- Banner Start -->
   <div class="container-fluid banner py-5">
    <div class="container">
        <div class="banner-inner bg-light p-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-8 py-5 text-center">
                    <h1 class="display-6 wow fadeIn" data-wow-delay="0.3s">Your Reliable Partner in Healthcare Supply</h1>
                    <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s">
                        We are committed to supporting hospitals, clinics, and pharmacies with premium-quality medical
                        equipment and supplies. Together, we build a healthier tomorrow.
                    </p>
                    <div class="d-flex justify-content-center wow fadeIn" data-wow-delay="0.7s">
                        <a class="btn btn-primary py-3 px-4 me-3" href="#!">Explore Products</a>
                        <a class="btn btn-secondary py-3 px-4" href="#!">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Banner End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">120</h1>
                                <span class="text-dark">Professional Staff</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">25</h1>
                                <span class="text-white">Years of Experience</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-boxes-stacked fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">3000</h1>
                                <span class="text-white">Products Supplied</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-hospital-user fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">1500</h1>
                                <span class="text-dark">Satisfied Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">Why Choose Us</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Trusted Partner in Medical Supplies</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">
                    We are dedicated to providing healthcare facilities with reliable and affordable medical supplies.
                    Our reputation is built on quality products, timely delivery, and professional customer service.
                </p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-check text-primary me-2"></i>Certified and approved medical products</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.5s"><i class="fa fa-check text-primary me-2"></i>Strong distribution and logistics network</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.6s"><i class="fa fa-check text-primary me-2"></i>Experienced and dedicated support team</p>
                <div class="d-flex mt-4 wow fadeIn" data-wow-delay="0.7s">
                    <a class="btn btn-primary py-3 px-4 me-3" href="{{route('about')}}">Learn More</a>
                    <a class="btn btn-secondary py-3 px-4" href="{{route('contact')}}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Features End -->


    <!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
            <h1 class="display-6 mb-4">Meet Our Professional Team</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{asset('img/team-1.jpeg')}}" alt="">
                        <h3>Fadhili mwankenja</h3>
                        <span>Operation Manager</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{asset('img/team-2.jpeg')}}" alt="">
                        <h3>Patrick mbise</h3>
                        <span>Operation Manager</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{asset('img/team-3.jpeg')}}" alt="">
                        <h3>Clementina peter</h3>
                        <span>Sales & Procurement Officer</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{asset('img/team-3.png')}}" alt="">
                        <h3>Dr. Ambwene john mwankenja</h3>
                        <span>Director</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->




    <!-- Footer Start -->
    @include('layouts.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@include('layouts.links')
</body>

</html>