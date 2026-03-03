<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

$products = Product::orderByDesc('id')
                    ->take(4)
                    ->get();

$products1 = Product::orderByDesc('id')
                     ->skip(4)
                     ->take(4)
                     ->get();

$products2 = Product::orderByDesc('id')
                     ->skip(8)
                     ->take(4)
                     ->get();

        return view('index', compact('products','products1','products2'));
    }
}
