@include('layouts.head')

<body>
    @include('layouts.topbar')
    @include('layouts.Adminnavbar')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h1 class="display-3 animated slideInDown">Profile</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#!">Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Profile Content Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">

                <!-- Update Profile -->
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body bg-white dark:bg-gray-800 rounded p-4">
                        <h4 class="mb-3 text-primary">Update Profile Information</h4>
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                <!-- Update Password -->
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body bg-white dark:bg-gray-800 rounded p-4">
                        <h4 class="mb-3 text-primary">Update Password</h4>
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <!-- Delete Account -->
                <div class="card shadow-sm border-0">
                    <div class="card-body bg-white dark:bg-gray-800 rounded p-4">
                        <h4 class="mb-3 text-danger">Delete Account</h4>
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Profile Content End -->

    @include('layouts.footer')
    @include('layouts.links')
</body>

</html>
