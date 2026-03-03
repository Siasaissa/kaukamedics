@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.navbar')

<div class="container py-5">
    <h2 class="mb-4 text-center">Your Cart</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cart as $id => $item)
                        @php 
                            $subtotal = $item['price'] * $item['quantity']; 
                            $total += $subtotal; 
                        @endphp
                        <tr>
                            <td>
    <img src="{{ !empty($item['image']) && file_exists(public_path('storage/app/public/'.$item['image']))
                 ? asset('storage/app/public/'.$item['image'])
                 : asset('img/defaultmedical.jpg') }}"
         width="60"
         class="img-fluid rounded"
         alt="{{ $item['name'] }}">
</td>

                            <td class="fw-semibold">{{ $item['name'] }}</td>
                            <td>Tsh {{ number_format($item['price'],2) }}</td>
                            <td>
                                <form action="{{ route('update.cart', $id) }}" method="POST" class="d-flex justify-content-center align-items-center gap-2">
                                    @csrf
                                    <input type="number" 
                                           name="quantity" 
                                           value="{{ $item['quantity'] }}" 
                                           min="1" 
                                           class="form-control form-control-sm w-50 text-center">
                                    <button class="btn btn-sm btn-outline-primary" type="submit">
                                        <i class="bi bi-arrow-repeat"></i>
                                    </button>
                                </form>
                            </td>
                            <td>Tsh {{ number_format($subtotal,2) }}</td>
                            <td>
                                <a href="{{ route('remove.from.cart', $id) }}" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="fw-bold">
                        <td colspan="4" class="text-end">Total</td>
                        <td colspan="2">Tsh {{ number_format($total,2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between flex-wrap mt-4">
            <a href="{{ route('products') }}" class="btn btn-outline-secondary mb-2">
                <i class="bi bi-arrow-left"></i> Continue Shopping
            </a>
            <a href="{{ route('checkout') }}" class="btn btn-primary px-5 mb-2">
                Proceed to Checkout
            </a>
        </div>
    @else
        <div class="alert alert-info text-center">Your cart is empty.</div>
    @endif
</div>

@include('layouts.footer')
@include('layouts.links')
</body>
</html>
