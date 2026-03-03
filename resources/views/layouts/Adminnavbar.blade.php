<div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 py-3">
        <a class="navbar-brand d-lg-none" href="{{ route('dashboard') }}">
            <i class="bi bi-house-door me-1"></i> Dashboard
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <i class="bi bi-house-door me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.products.index') }}" class="nav-link {{ Route::is('admin.products.*') ? 'active' : '' }}">
                        <i class="bi bi-box-seam me-1"></i> Products
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.orders.index') }}" class="nav-link {{ Route::is('admin.orders.*') ? 'active' : '' }}">
                        <i class="bi bi-bag-check me-1"></i> Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.customers.index') }}" class="nav-link {{ Route::is('admin.customers.*') ? 'active' : '' }}">
                        <i class="bi bi-people me-1"></i> Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.report.index') }}" class="nav-link {{ Route::is('admin.report.index') ? 'active' : '' }}">
                        <i class="bi bi-graph-up me-1"></i> Reports
                    </a>
                </li>
            </ul>

            <!-- Admin Profile Dropdown -->
            <div class="dropdown ms-auto">
                <a class="btn btn-secondary dropdown-toggle d-flex align-items-center" href="#" role="button" id="adminMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name ?? 'Admin' }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminMenu">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="bi bi-gear me-1"></i> Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right me-1"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
