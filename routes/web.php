<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;

//Route::get('/', function () { return view('index'); })->name('index');

Route::get ('/' , [IndexController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    
    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');



Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart/remove/{id}', [ProductController::class, 'removeFromCart'])->name('remove.from.cart');
Route::post('/cart/update/{id}', [ProductController::class, 'updateCart'])->name('update.cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

Route::post('/products/special', [ProductController::class, 'specialOrder'])->name('products.special');


Route::middleware(['auth'])->group(function () { 
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/admin/products/index', [ProductController::class, 'adminProduct'])->name('admin.products.index');
        // Add a new product
    Route::post('products', [ProductController::class, 'store'])->name('admin.products.store');

    // Update existing product
    Route::put('products/{product}', [ProductController::class, 'update'])->name('admin.products.update');

    // Delete product
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/admin/customers', [CustomerController::class, 'index'])->name('admin.customers.index');
    Route::get('/admin/Report/index', [ReportController::class, 'index'])->name('admin.report.index');
    Route::get('admin/Report/download', [ReportController::class, 'download'])->name('admin.report.download');
    Route::get('/admin/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
    Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
    Route::post('admin/products/upload-excel', [ProductController::class, 'uploadExcel'])->name('admin.products.uploadExcel');




});


// routes/web.php
Route::get('/routes', function () {
    $routes = collect(app('router')->getRoutes())->map(function ($route) {
        return [
            'uri' => $route->uri(),
            'name' => $route->getName(),
            'action' => $route->getActionName(),
            'methods' => $route->methods(),
        ];
    });
    return response()->json($routes);
});

Route::get('/clear', function() {
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    return "Cache cleared";
});


Route::get('/test-api', function() {
    return response()->json(['success' => true, 'message' => 'API works']);
});




require __DIR__.'/auth.php';
