<div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
            <h4 class="d-lg-none m-0">Menu</h4>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="{{ route('index') }}"
                        class="nav-item nav-link {{ Route::is('index') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ Route::is('about') ? 'active' : ''}}">About</a>
                    <a href="{{ route('service') }}"
                        class="nav-item nav-link {{ Route::is('service') ? 'active' : '' }}">Service</a>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                    <a href="{{ route('products') }}"
                        class="nav-item nav-link {{ Route::is('products') ? 'active' : '' }}">Products</a>
                </div>
                <div class="d-flex ms-auto align-items-center">
                    @if (Route::is('products'))
                        <!-- Cart Icon for Products Page -->
                        <a class="btn btn-square btn-primary ms-3 position-relative" href="{{ route('cart') }}">
                            <i class="bi bi-cart3 fs-5 text-white"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ session('cart') ? count(session('cart')) : 0 }}
                            </span>
                        </a>
                    @else
                        <!-- Social Icons for Other Pages 
                        <a class="btn btn-square btn-dark ms-2" href="#!"><i class="fab fa-twitter"></i></a>-->
                        <a class="btn btn-square btn-dark ms-2" href="https://www.facebook.com/ambwenekauka/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-dark ms-2" href="https://www.instagram.com/kauka_medical_supplies/"><i class="fab fa-instagram"></i></a>
                    @endif
                </div>

            </div>
        </nav>
    </div>
</div>