@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.Adminnavbar')

<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Manage Orders</h2>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Items</th>
                <th>Total (Tsh)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders ?? [] as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->name }}</td>
        
        <td>{{ $order->phone }}</td>
        <td>
            @if(!empty($order->items))
                {{ collect($order->items)->pluck('name')->join(', ') }}
            @else
                N/A
            @endif
        </td>
        <td>{{ number_format($order->total, 2) }}</td>
        <td>
            <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info">View</a>
            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this order?')">Delete</button>
            </form>

        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="text-center text-muted">No orders found.</td>
    </tr>
@endforelse

        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
    {{ $orders->links('pagination::bootstrap-5') }}
</div>
</div>

@include('layouts.footer')
@include('layouts.links')
</body>
</html>
