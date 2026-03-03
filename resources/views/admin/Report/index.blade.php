@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.Adminnavbar')

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Orders Report</h2>
        <!-- Optional date filter form -->
<form class="d-flex ms-2" method="GET" action="{{ route('admin.report.download') }}">
    <input type="hidden" name="from" value="{{ request('from') }}">
    <input type="hidden" name="to" value="{{ request('to') }}">
    <button type="submit" class="btn btn-success">
        <i class="bi bi-download"></i> Download Report
    </button>
</form>


    </div>

    <div class="table-responsive shadow-sm rounded-3">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#ID</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Items</th>
                    <th>Total (Tsh)</th>
                    <th>Status</th>
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
                            <span class="badge bg-{{ $order->status == 'completed' ? 'success' : 'warning' }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-4">
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.links')
</body>
</html>
