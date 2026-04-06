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
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
	@include('layouts.header')
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>

                        <!-- Flash / validation messages -->
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Checkout form: posts to CheckoutController@process -->
                        <form id="checkoutForm" class="row contact_form" action="{{ route('checkout.process') }}" method="POST" novalidate="novalidate">
                            @csrf

                            <div class="col-md-6 form-group p_star">
                                <input required type="text" class="form-control" id="first" name="name" value="{{ old('name') }}" placeholder="Full name">
                                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="col-md-6 form-group p_star">
                                <input required type="text" class="form-control" id="number" name="phone" value="{{ old('phone') }}" placeholder="Phone number">
                                @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="col-md-6 form-group p_star">
                                <input required type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input required type="text" class="form-control" id="add1" name="address" value="{{ old('address') }}" placeholder="Address line 01">
                                @error('address')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="col-md-12 form-group p_star">
                                <input required type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" placeholder="Town/City">
                                @error('city')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="col-12 mt-3">
                                <!-- payment selection included in right column order box as radios. This button will finalize order -->
                                <button type="submit" class="primary-btn">Confirm Order</button>
                            </div>

                        </form>

                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                @php
                                    $total = 0;
                                @endphp
                                @if(!empty($cart) && count($cart) > 0)
                                    @foreach($cart as $id => $item)
                                        @php
                                            $qty = isset($item['quantity']) ? (int)$item['quantity'] : 1;
                                            $price = isset($item['price']) ? (float)$item['price'] : 0;
                                            $line = $price * $qty;
                                            $total += $line;
                                        @endphp
                                        <li>
                                            <a href="#">{{ $item['name'] ?? 'Product' }} <span class="middle">x {{ $qty }}</span> <span class="last">TZS {{ number_format($line, 2) }}</span></a>
                                        </li>
                                    @endforeach
                                @else
                                    <li><a href="#">No items in your cart</a></li>
                                @endif
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>TZS {{ number_format($total, 2) }}</span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: TZS 2,000</span></a></li>
                                <li><a href="#">Total <span>TZS {{ number_format($total + 2000, 2) }}</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="payment_method" value="check">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="payment_method" value="paypal" checked>
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="accept_terms">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <!-- Make this button submit the top form via JS so UI remains same -->
                            <button id="checkoutSubmit" class="primary-btn">Proceed to Paypal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
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

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
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

    <script>
    // Wire the right-column action button to submit the top checkout form with the selected payment method
    $(document).ready(function(){
        $('#checkoutSubmit').on('click', function(e){
            e.preventDefault();
            var payment = $('input[name="payment_method"]:checked').val() || 'paypal';
            var $form = $('#checkoutForm');
            if ($form.length === 0) return alert('Checkout form not found.');

            // set or create hidden input for payment_method so controller receives it
            var $pm = $form.find('input[name="payment_method"]');
            if ($pm.length === 0) {
                $form.append('<input type="hidden" name="payment_method" value="' + payment + '">');
            } else {
                $pm.val(payment);
            }

            // submit the form
            $form.submit();
        });
    });
    </script>
</body>

</html>