@extends('layouts.master')
@section('title', 'Cart')
@section('content')

@if (session()->has('success'))
<section class="pop-up">
    <div class="pop-up-box">
        <div class="pop-up-title">
            {{ session()->get('success') }}
        </div>
        <div class="pop-up-actions">
            <a href="{{ route('cart') }}" class="btn btn-outlined">Continue Shopping</a>
            <a href="{{ route('cart') }}" class="btn btn-primary">Checkout</a>
        </div>
    </div>
</section>
@endif

<div class="container my-5">
    <div class="row">
        <!-- Phần sản phẩm (Products) -->
        <div class="col-lg-8 col-md-7">
            @if(session()->has('cart') && count(session()->get('cart')) > 0)
            <h2>Your Cart</h2>
            @foreach(session()->get('cart') as $key => $item)
            <div class="cart-item d-flex align-items-center justify-content-between mb-3 p-3 border rounded">
                <img src="{{ $item['product']['image'] }}" alt="{{ $item['product']['title'] }}" style="width: 100px; height: auto;">
                <div class="ms-3 flex-grow-1">
                    <h5 class="mb-1">{{ $item['product']['title'] }}</h5>
                    <span>${{ $item['product']['price'] }}</span>
                    <div class="d-flex align-items-center">
                        <span>Quantity: {{ $item['quantity'] }}</span>
                    </div>
                    <form action="{{ route('removeFromCart', $key) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="background: none; border: none;">
                            <svg width="20" height="20" viewBox="0 0 16 16" aria-hidden="true" focusable="false" role="presentation" class="icon">
                                <path d="M14 3h-3.53a3.07 3.07 0 0 0-.6-1.65C9.44.82 8.8.5 8 .5s-1.44.32-1.87.85A3.06 3.06 0 0 0 5.53 3H2a.5.5 0 0 0 0 1h1.25v10c0 .28.22.5.5.5h8.5a.5.5 0 0 0 .5-.5V4H14a.5.5 0 0 0 0-1zM6.91 1.98c.23-.29.58-.48 1.09-.48s.85.19 1.09.48c.2.24.3.6.36 1.02h-2.9c.05-.42.17-.78.36-1.02zm4.84 11.52h-7.5V4h7.5v9.5z" fill="currentColor"></path>
                                <path d="M6.55 5.25a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 1 0v-6a.5.5 0 0 0-.5-.5zm2.9 0a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 1 0v-6a.5.5 0 0 0-.5-.5z" fill="currentColor"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="text-end" style="min-width: 120px;">
                    <p class="fw-bold mb-1">${{ App\Models\Cart::unitPrice($item) }}</p>
                </div>
            </div>
            @endforeach
            @else
            <div class="empty-cart d-flex flex-column justify-content-center align-items-center">
                <h2>Your Cart</h2>
                <svg width="30" height="31" viewBox="0 0 21 19" fill="currentColor" aria-hidden="true" focusable="false" role="presentation" class="icon">
                    <path d="M10 6.25V.5h1.5v5.75H21l-3.818 12H3.818L0 6.25h10Zm-7.949 1.5 2.864 9h11.17l2.864-9H2.05h.001Z"></path>
                </svg>
                <p class="text-muted mt-2">Your cart is empty</p>
                <a href="{{ route('home') }}" class="btn btn-dark mt-3">Start Shopping</a>
            </div>
            @endif
        </div>

        <!-- Phần Order Summary -->
        @if(session()->has('cart') && count(session()->get('cart')) > 0)
        <div class="col-lg-4 col-md-5">
            <div class="order-summary p-3 border rounded">
                <h5>Order Summary</h5>
                <div class="mb-3">
                    <label for="orderNote" class="form-label">Add order note</label>
                    <textarea class="form-control" id="orderNote" rows="3"></textarea>
                </div>
                <p>Tax included, shipping and discounts calculated at checkout.</p>
                <h5>Subtotal: ${{ App\Models\Cart::totalAmount() }}</h5>
                <form action="{{ route('checkout') }}">
                    <button class="btn btn-dark checkout-btn mt-3 w-100">Checkout</button>
                </form>

                @endif
            </div>
        </div>
    </div>
</div>

@endsection