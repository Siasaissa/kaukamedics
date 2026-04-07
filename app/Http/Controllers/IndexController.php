<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index(){

$products = $this->withImageUrls(
    Product::orderByDesc('id')
        ->take(4)
        ->get()
);

$products1 = $this->withImageUrls(
    Product::orderByDesc('id')
        ->skip(4)
        ->take(4)
        ->get()
);

$products2 = $this->withImageUrls(
    Product::orderByDesc('id')
        ->skip(8)
        ->take(4)
        ->get()
);
$produc = $this->withImageUrls(Product::all());

        return view('index', compact('products','products1','products2','produc'));
    }

    private function withImageUrls($products)
    {
        return $products->map(function ($product) {
            $imagePath = trim((string) ($product->image ?? ''));
            $normalized = str_replace('\\', '/', $imagePath);
            $normalized = ltrim(str_replace(['storage/app/public/', 'storage/'], '', $normalized), '/');
            $imageUrl = asset('img/defaultmedical.jpg');

            if ($imagePath !== '') {
                if (Str::startsWith($imagePath, ['http://', 'https://'])) {
                    $imageUrl = $imagePath;
                } elseif (file_exists(storage_path('app/public/' . $normalized))) {
                    $imageUrl = asset('storage/' . $normalized);
                } elseif (file_exists(public_path('storage/' . $normalized))) {
                    $imageUrl = asset('storage/' . $normalized);
                } elseif (file_exists(public_path($imagePath))) {
                    $imageUrl = asset($imagePath);
                }
            }

            $product->image_url = $imageUrl;

            return $product;
        });
    }
}
