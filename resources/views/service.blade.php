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
    <title>Kauka Medics | Medical Supplies & Healthcare Solutions</title>
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

    <!-- ========== SPINNER + TOPBAR (layouts.topbar) ========== -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary top-bar wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center h-100">
            <div class="col-lg-4 text-center text-lg-start">
                <a href="/">
                    <img src="img/logo.png" alt="Kauka Medics" class="img-fluid" style="height: 100px; filter: brightness(0) invert(1);">
                </a>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Call Us</h6>
                                <span class="text-white">+255 625 726 051</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Mail Us</h6>
                                <span class="text-white">info@kaukamedics.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Address</h6>
                                <span class="text-white">Magomeni kanisani</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Notification Area (dynamic alerts from session) -->
    <div id="alert-message" class="position-fixed top-0 end-0 mt-4 me-4 px-4 py-3 rounded-3 shadow-lg fade show" style="min-width: 320px; background-color: rgba(40,167,69,0.9); color: #fff; backdrop-filter: blur(6px); z-index: 2000; transform: translateX(150%); transition: transform 0.5s ease, opacity 0.6s ease; opacity: 0; display: none;">
        <div class="d-flex align-items-center">
            <i class="fa fa-check-circle me-2 fs-5"></i>
            <div><strong>Success:</strong> <span>Demo notification — your session would show here.</span></div>
        </div>
    </div>

    <!-- ========== NAVBAR (layouts.navbar) ========== -->
    <div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
                <h4 class="d-lg-none m-0">Menu</h4>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link active">Service</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="products.html" class="nav-item nav-link">Products</a>
                    </div>
                    <div class="d-flex ms-auto align-items-center">
                        <!-- Social Icons for non-products page -->
                        <a class="btn btn-square btn-dark ms-2" href="https://www.facebook.com/ambwenekauka/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-dark ms-2" href="https://www.instagram.com/kauka_medical_supplies/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- ========== PAGE HEADER (Service) ========== -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- ========== VIDEO SECTION ========== -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-11">
                    <div class="h-100 py-5 d-flex align-items-center">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="img/video3.mp4" data-bs-target="#videoModal">
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
                            <source src="img/video3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- ========== SERVICE SECTION ========== -->
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
                                <p class="mb-2">Supplying high-quality diagnostic and treatment equipment to hospitals and clinics nationwide.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-kit-medical fa-2x text-secondary"></i>
                                </div>
                                <h3>Hospital Consumables</h3>
                                <p class="mb-2">From gloves and syringes to bandages and masks — we ensure consistent supply of essential medical items.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-heart-pulse fa-2x text-secondary"></i>
                                </div>
                                <h3>Patient Care Products</h3>
                                <p class="mb-2">Providing comfort and safety with reliable patient care and monitoring solutions.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-pills fa-2x text-secondary"></i>
                                </div>
                                <h3>Pharmaceutical Supplies</h3>
                                <p class="mb-2">Delivering trusted pharmaceutical products that meet global safety and efficacy standards.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-truck-medical fa-2x text-secondary"></i>
                                </div>
                                <h3>Medical Logistics</h3>
                                <p class="mb-2">Efficient distribution network ensuring timely delivery of critical medical supplies across regions.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item h-100">
                                <div class="btn-square bg-light mb-4">
                                    <i class="fa fa-hospital fa-2x text-secondary"></i>
                                </div>
                                <h3>Hospital Setup Solutions</h3>
                                <p class="mb-2">Comprehensive support for new and existing healthcare facilities — from planning to full equipment installation.</p>
                                <a href="#!">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- ========== TESTIMONIAL SECTION ========== -->
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
                                        <img class="img-fluid" src="img/team-1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i></div>
                                        <p class="fs-5">Their medical supplies are of exceptional quality. Our hospital has greatly benefited from their quick service and dependable products.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0"><i class="fa fa-quote-right fa-2x"></i></div>
                                            <div class="ps-3"><h5 class="mb-0">Dr. Henry Mwenda</h5><span>Medical Director, CityCare Hospital</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img"><img class="img-fluid" src="img/team-2.png" alt=""></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i></div>
                                        <p class="fs-5">We’ve partnered with them for over three years. Their professionalism and commitment to healthcare delivery are unmatched.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0"><i class="fa fa-quote-right fa-2x"></i></div>
                                            <div class="ps-3"><h5 class="mb-0">Sarah John</h5><span>Procurement Officer, Meditech Labs</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img"><img class="img-fluid" src="img/team-3.png" alt=""></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i></div>
                                        <p class="fs-5">Thanks to their efficient delivery and reliable products, our clinic operations have become smoother and more effective.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-light text-secondary flex-shrink-0"><i class="fa fa-quote-right fa-2x"></i></div>
                                            <div class="ps-3"><h5 class="mb-0">Dr. Kelvin Chacha</h5><span>Head of Clinic Operations, LifePoint Health</span></div>
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

    <!-- ========== FOOTER (layouts.footer) ========== -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dar es Salaam, Tanzania</p>
                    <p class="mb-2"><i class="fa fa-address-alt me-3"></i>Po.box 14012</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+255 625 726 051</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@kaukamedics.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/ambwenekauka/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/kauka_medical_supplies/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="products.html">Our Products</a>
                    <a class="btn btn-link bi bi-person" href="login.html">Admin</a>
                    <a class="btn btn-link" href="#!">Privacy Policy</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">08:00 am - 05:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 01:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Product Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4"><img class="img-fluid w-100" src="img/gallery-1.jpg" alt="Medical Equipment"></div>
                        <div class="col-4"><img class="img-fluid w-100" src="img/gallery-2.jpg" alt="Surgical Tools"></div>
                        <div class="col-4"><img class="img-fluid w-100" src="img/gallery-3.jpg" alt="Hospital Supplies"></div>
                        <div class="col-4"><img class="img-fluid w-100" src="img/gallery-4.jpg" alt="Diagnostic Devices"></div>
                        <div class="col-4"><img class="img-fluid w-100" src="img/gallery-5.jpg" alt="Laboratory Equipment"></div>
                        <div class="col-4"><img class="img-fluid w-100" src="img/gallery-6.jpg" alt="Medical Instruments"></div>
                    </div>
                </div>
            </div>
            <div class="copyright pt-5">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="fw-semi-bold" href="#!">kauka_medical_supplies</a>, All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="fw-semi-bold" href="#!">kaukamedics</a>. Distributed by
                        <a class="fw-semi-bold" href="#!">kauka_medical_supplies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- ========== LAYOUTS.LINKS (JavaScript Libraries) ========== -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Additional inline scripts for toast and carousel init -->
    <script>
        // Simulate notification (if session variables existed, they'd show here)
        document.addEventListener("DOMContentLoaded", function() {
            // Optional: Demo for alert (hidden by default, but you can test by uncommenting)
            // For demonstration we keep the alert hidden unless session trigger exists in real backend.
            // However we also initialize WOW and testimonial carousel if needed.
            if (typeof WOW !== 'undefined') {
                new WOW().init();
            }
            // Initialize owl carousel for testimonials
            if ($('.testimonial-carousel').length) {
                $('.testimonial-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 800,
                    responsive: {
                        0: { items: 1 },
                        768: { items: 1 },
                        992: { items: 1 }
                    }
                });
            }
            // Back to top functionality
            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 800);
            });
            // Video modal autoplay logic
            $('#videoModal').on('shown.bs.modal', function(e) {
                let videoSrc = $(e.relatedTarget).data('src');
                let videoElem = $('#video');
                if (videoElem.length) {
                    videoElem[0].src = videoSrc;
                    videoElem[0].play();
                }
            }).on('hidden.bs.modal', function() {
                let videoElem = $('#video');
                if (videoElem.length) {
                    videoElem[0].pause();
                    videoElem[0].src = '';
                }
            });
        });
    </script>
</body>

</html>