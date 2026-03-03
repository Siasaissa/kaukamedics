@include('layouts.head')
<body>
@include('layouts.topbar')
@include('layouts.navbar')

<div class="container py-5">
    <h2 class="mb-4 text-center">Checkout</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <div class="row g-4">
            <!-- Billing Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="mb-4">Billing Details</h5>

                    <form action="{{ route('checkout.process') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="+255..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control" placeholder="e.g. Dar es Salaam" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Delivery Address</label>
                                <textarea name="address" class="form-control" rows="3" placeholder="Enter your full delivery address" required></textarea>
                            </div>
                        </div>
                            <div class="mt-4">
                                <h6 class="mb-3">Select Payment Method</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="mpesa" value="M-Pesa" checked>
                                    <label class="form-check-label" for="mpesa">M-Pesa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="crdb" value="CRDB">
                                    <label class="form-check-label" for="crdb">CRDB BANK</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="nmb" value="NMB">
                                    <label class="form-check-label" for="nmb">NMB BANK</label>
                                </div>
                            </div>

                        <div class="mt-4 d-flex justify-content-between">
                            <a href="{{ route('cart') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left"></i> Back to Cart
                            </a>
                            <button type="submit" class="btn btn-primary px-5">
                                Confirm Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4">
                    <h5 class="mb-4">Order Summary</h5>

                    @php $total = 0; @endphp
                    @foreach(session('cart') as $item)
                        @php 
                            $subtotal = $item['price'] * $item['quantity']; 
                            $total += $subtotal; 
                        @endphp
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                            <div>
                                <strong>{{ $item['name'] }}</strong><br>
                                <small>{{ $item['quantity'] }} × Tsh {{ number_format($item['price'],2) }}</small>
                            </div>
                            <span>Tsh {{ number_format($subtotal,2) }}</span>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-between mt-3">
                        <strong>Total:</strong>
                        <strong>Tsh {{ number_format($total,2) }}</strong>
                    </div>

                    
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center">Your cart is empty. <a href="{{ route('products') }}">Go to Products</a></div>
    @endif
</div>

<!-- Payment Instructions Modal -->
@if (session('show_instructions'))
<div class="modal fade" id="paymentInstructionsModal" tabindex="-1" aria-labelledby="paymentInstructionsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="paymentInstructionsLabel">Payment Instructions</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-start">
                @php
                    $method = session('payment_method');
                    $total = session('total');
                @endphp

                <p><strong>Payment Method:</strong> {{ $method }}</p>
                <p><strong>Total Amount:</strong> Tsh {{ number_format($total, 2) }}</p>

                @if ($method === 'M-Pesa')
                    <p>To complete your payment via <strong>M-Pesa</strong>:</p>
                    <ol>
                        <li>Dial <code>*150*00#</code></li>
                        <li>Select <strong>Pay by M-Pesa</strong></li>
                        <li>Lipa Namba: <strong>5066500</strong></li>
                        <li>Enter Amount: Tsh {{ number_format($total, 2) }}</li>
                    </ol>
                @elseif ($method === 'CRDB')
                    <p>To complete your payment via <strong>CRDB BANK</strong>:</p>
                    <ol>
                        <li>Account Number: <strong>015C000T5WU00</strong></li>
                        <li>Enter Amount: Tsh {{ number_format($total, 2) }}</li>
                    </ol>
                @else
                    <p>To complete your payment via <strong>NMB BANK</strong>:</p>
                    <ol>
                        <li>Account Number: <strong>25110033313</strong></li>
                        <li>Enter Amount: Tsh {{ number_format($total, 2) }}</li>
                    </ol>
                @endif

                <p class="mt-3 text-success"><strong>Note:</strong> After completing payment, please keep your transaction message as proof and call me through +255 625 726 051 to verify.</p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('products') }}" class="btn btn-success w-100">Back to Products</a>
            </div>
        </div>
    </div>
</div>

<!-- Auto show modal -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = new bootstrap.Modal(document.getElementById('paymentInstructionsModal'));
        modal.show();
    });
</script>
@endif


@include('layouts.footer')
@include('layouts.links')
</body>
</html>
