@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.Adminnavbar')

<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Business Dashboard</h2>

    <!-- Dashboard Overview Cards -->
    <div class="row g-4 mb-4">
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm border-0 rounded-4 text-center p-4">
                <h6 class="text-muted">Total Sales</h6>
                <h3 class="fw-bold text-success">Tsh {{ number_format($totalRevenue ?? 0, 2) }}</h3>
                <small class="text-secondary">This Month</small>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm border-0 rounded-4 text-center p-4">
                <h6 class="text-muted">Total Orders</h6>
                <h3 class="fw-bold text-primary">{{ $totalOrders ?? 0 }}</h3>
                <small class="text-secondary">All Time</small>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card shadow-sm border-0 rounded-4 text-center p-4">
                <h6 class="text-muted">Total Products</h6>
                <h3 class="fw-bold text-warning">{{ $totalProducts?? 0 }}</h3>
                <small class="text-secondary">Returning Clients</small>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <h5 class="mb-3 fw-semibold">Recent Orders</h5>
                <ul class="list-group list-group-flush">
                    @forelse($recentOrders ?? [] as $order)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            
            @foreach($order->items as $item)
                <small>{{ $item['name'] }} x{{ $item['quantity'] }}</small><br>
            @endforeach
        </div>
        <span class="badge bg-{{ $order->status == 'completed' ? 'success' : 'warning' }}">
            {{ ucfirst($order->status) }}
        </span>
    </li>
@empty
    <li class="list-group-item text-center text-muted">
        No recent orders.
    </li>
@endforelse

                </ul>
            </div>
        </div>
    </div>

    </div>

    <!-- Charts & Recent Activities -->
    <div class="row g-4">
        <!-- Sales Chart -->
<div class="card mt-5">
    <div class="card-header">
        <h5>Monthly Sales Overview</h5>
    </div>
    <div class="card-body">
        <canvas id="salesChart" height="120"></canvas>
    </div>
</div>

        <!-- Recent Orders -->
        
</div>

@include('layouts.footer')
@include('layouts.links')

<!-- Optional ChartJS for sales graph -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($salesMonths ?? ['Jan', 'Feb', 'Mar', 'Apr']) !!},
            datasets: [{
                label: 'Monthly Sales (Tsh)',
                data: {!! json_encode($salesValues ?? [0, 0, 0, 0]) !!},
                borderColor: '#007bff',
                backgroundColor: 'rgba(0, 123, 255, 0.1)',
                fill: true,
                tension: 0.3,
                borderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
                tooltip: { mode: 'index', intersect: false },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Sales (Tsh)' }
                },
                x: {
                    title: { display: true, text: 'Month' }
                }
            }
        }
    });
});
</script>


</body>
</html>
