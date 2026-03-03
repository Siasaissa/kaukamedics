@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.Adminnavbar')

<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Customers</h2>

    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Total Orders</th>
        </tr>
    </thead>
    <tbody>
        @forelse($customers as $customer)
            <tr>
                <td>{{ $loop->iteration + ($customers->currentPage() - 1) * $customers->perPage() }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->orders_count }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted">No customers found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center mt-4">
    {{ $customers->links('pagination::bootstrap-5') }}
</div>

</div>

@include('layouts.footer')
@include('layouts.links')
</body>
</html>
