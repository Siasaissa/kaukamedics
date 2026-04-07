<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body class="g-sidenav-show bg-gray-100">
    @include('layouts.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('layouts.Adminnavbar')

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3 mb-0">Bulk SMS</h6>
                            </div>
                        </div>
                        <div class="card-body px-4 py-4">
                            <p class="mb-3">This Bulk SMS page is now routed correctly and ready for implementation.</p>
                            <p class="text-sm text-muted mb-4">You can use this area to compose messages, choose recipients, and track delivery logs.</p>
                            <div class="alert alert-info text-white mb-0">
                                Bulk SMS functionality has not been built yet, but the route and admin page are now working properly.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.adminfooter')
        </div>
    </main>
</body>
</html>
