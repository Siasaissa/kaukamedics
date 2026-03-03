<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;



class ProductController extends Controller
{
    // Display all products
    public function index(Request $request)
    {
        $query = $request->query('query');
        $products = Product::when($query, function($q) use ($query) {
            $q->where('name', 'like', "%$query%");
        })->get();

        return view('products', compact('products'));
    }

    // Add product to cart (session only)
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Show cart contents from session
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Remove item from cart
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Item removed successfully!');
    }

    // Update quantity
    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, (int)$request->quantity);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Cart updated successfully!');
    }

    // Proceed to checkout (save to DB here later)
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('products')->with('error', 'Your cart is empty!');
        }

        // For now, just show checkout confirmation
        return view('checkout', compact('cart'));
    }
    public function adminProduct(){
       $products = Product::orderBy('id', 'desc')->paginate(20);

        return view('admin.products.index',compact('products'));
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'name'  => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'nullable|integer|min:0',
        'unit'  => 'nullable|string|max:50',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // optional
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public'); 
        $validated['image'] = $imagePath; // store the path in DB
    }

    Product::create($validated);

    return redirect()->route('admin.products.index')->with('success', 'Product added successfully.');
}


public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'name'  => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'nullable|integer|min:0',
        'unit'  => 'nullable|string|max:50',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Optionally delete old image
        if ($product->image && \Storage::disk('public')->exists($product->image)) {
            \Storage::disk('public')->delete($product->image);
        }

        $imagePath = $request->file('image')->store('products', 'public'); 
        $validated['image'] = $imagePath;
    }

    $product->update($validated);

    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
}


public function destroy(Product $product)
{
    // Optionally delete image
    if ($product->image && file_exists(public_path('img/' . $product->image))) {
        unlink(public_path('img/' . $product->image));
    }

    $product->delete();

    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
}

public function uploadExcel(Request $request)
{
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,csv'
    ]);

    Excel::import(new ProductsImport, $request->file('excel_file'));

    return redirect()->back()->with('success', 'Products uploaded successfully!');
}

// Add special order (custom product) to cart
public function specialOrder(Request $request)
{
    $request->validate([
        'product_name' => 'required|string|max:255',
        'quantity' => 'nullable|integer|min:1',
        'notes' => 'nullable|string|max:255',
    ]);

    $cart = session()->get('cart', []);

    // Create a unique ID for this custom item
    $id = 'custom-' . uniqid();

    $cart[$id] = [
        "name" => $request->product_name,
        "price" => 0, // unknown price (admin can review later)
        "quantity" => $request->quantity ?? 1,
        "image" => "default.png", // placeholder image
        "notes" => $request->notes,
        "custom" => true,
    ];

    session()->put('cart', $cart);

    return redirect()->route('cart')->with('success', 'Your special order has been added to the cart!');
}

//start of Api function

  public function apiIndex(Request $request)
    {
        $query = $request->query('query');
        $perPage = $request->query('per_page', 10);

        $products = Product::when($query, function($q) use ($query) {
                $q->where('name', 'like', "%$query%");
            })
            ->orderBy('id', 'desc')
            ->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => $products->items(),
            'current_page' => $products->currentPage(),
            'last_page' => $products->lastPage(),
            'total' => $products->total(),
        ]);
    }

    // --- Get single product ---
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    // --- Cart operations ---
    private function getCart(Request $request)
    {
        return $request->session()->get('cart', []);
    }

    public function apiCart(Request $request)
    {
        $cart = $this->getCart($request);
        return response()->json([
            'success' => true,
            'data' => $cart
        ]);
    }

    public function apiAddToCart(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $product = Product::find($request->id);
        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        $cart = $this->getCart($request);
        $quantity = $request->quantity ?? 1;

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] += $quantity;
        } else {
            $cart[$request->id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => $quantity,
                "image" => $product->image
            ];
        }

        $request->session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart',
            'cart' => $cart
        ]);
    }

    public function apiUpdateCart(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = $this->getCart($request);

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            $request->session()->put('cart', $cart);
            return response()->json(['success' => true, 'cart' => $cart]);
        }

        return response()->json(['success' => false, 'message' => 'Item not found in cart'], 404);
    }

    public function apiRemoveFromCart(Request $request)
    {
        $request->validate(['id' => 'required']);
        $cart = $this->getCart($request);

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            $request->session()->put('cart', $cart);
            return response()->json(['success' => true, 'cart' => $cart]);
        }

        return response()->json(['success' => false, 'message' => 'Item not found in cart'], 404);
    }

    // --- Special order ---
    public function apiSpecialOrder(Request $request)
{
    $request->validate([
        'product_name' => 'required|string|max:255',
        'quantity' => 'nullable|integer|min:1',
        'notes' => 'nullable|string|max:255',
    ]);

    $cart = session()->get('cart', []);

    // Create a unique ID for this custom item
    $id = 'custom-' . uniqid();

    $cart[$id] = [
        "name" => $request->product_name,
        "price" => 0, // unknown price (admin can review later)
        "quantity" => $request->quantity ?? 1,
        "image" => "default.png", // placeholder image
        "notes" => $request->notes,
        "custom" => true,
    ];

    session()->put('cart', $cart);

    return response()->json([
        'success' => true,
        'message' => 'Your special order has been added to the cart!',
        'cart' => $cart, // optional: return updated cart
    ]);
}



}
