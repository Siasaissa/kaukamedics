@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.Adminnavbar')

<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Order Details (ID: {{ $order->id }})</h2>

    <div class="card shadow-sm p-4">
        <p><strong>Customer:</strong> {{ $order->name }}</p>
        <p><strong>Phone:</strong> {{ $order->phone }}</p>
        <p><strong>Total:</strong> {{ number_format($order->total, 2) }} Tsh</p>
        <p><strong>Status:</strong> <span class="badge bg-{{ $order->status == 'completed' ? 'success' : 'warning' }}">{{ ucfirst($order->status) }}</span></p>

        <h5 class="mt-4">Items</h5>
        <td>
    @if(!empty($order->items))
        {{ collect($order->items)->pluck('name')->join(', ') }}
    @else
        N/A
    @endif
</td>


        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary mt-3">Back to Orders</a>
    </div>
</div>

@include('layouts.footer')
@include('layouts.links')
</body>
</html>
