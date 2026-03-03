<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // Total number of orders
    $totalOrders = Order::count();

    // Total revenue
    $totalRevenue = Order::sum('total');

    // Total number of products
    $totalProducts = Product::count();

    // Recent orders
    $recentOrders = Order::latest()->take(2)->get();

    // Top-selling products
    $topProducts = collect(Order::all())
        ->flatMap(fn($order) => collect($order->items))
        ->groupBy('name')
        ->map(fn($items, $name) => [
            'name' => $name,
            'total_sold' => $items->sum('quantity'),
            'total_earned' => $items->sum(fn($i) => $i['price'] * $i['quantity']),
        ])
        ->sortByDesc('total_sold')
        ->take(5)
        ->values();

    // 📈 Monthly sales chart data (for the last 6 months)
    $salesData = Order::selectRaw('MONTH(created_at) as month, SUM(total) as total')
        ->whereYear('created_at', now()->year)
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    $salesMonths = $salesData->map(fn($row) => date('M', mktime(0, 0, 0, $row->month, 1)))->toArray();
    $salesValues = $salesData->pluck('total')->toArray();

    return view('dashboard', compact(
        'totalOrders',
        'totalRevenue',
        'totalProducts',
        'recentOrders',
        'topProducts',
        'salesMonths',
        'salesValues'
    ));
}

}
