<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $products = Product::orderByDesc('id')
                            ->latest(4)
                            ->get();
        return view('index', compact('products'));
    }
}
