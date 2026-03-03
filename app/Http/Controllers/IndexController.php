<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $products = Product::orderByDesc('id')
                            ->take(5)
                            ->get();
        return view('index', compact('products'));
    }
}
