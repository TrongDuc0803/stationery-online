@extends('layouts.master')
@section('title', 'Checkout')
@section('head')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('content')

<main class="checkout-page">
    <div class="container my-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-lg-7">
                <div class="checkout-form">
                    <form action="" id="payment-form" method="post">
                        @csrf
                        <!-- Name -->
                        <div class="field mb-3">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" value="{{ old('name') ? old('name') : auth()->user()->name }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="field mb-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" value="{{ old('email') ? old('email') : auth()->user()->email }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="field mb-3">
                            <label for="phone">Phone</label>
                            <input type="number" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your phone" value="{{ old('phone') ? old('phone') : auth()->user()->phone }}">
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="field mb-3">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter your address" value="{{ old('address') ? old('address') : auth()->user()->address }}">
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning">Pay Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Summary Section -->
            <div class="col-lg-5">
                <div class="card p-3">
                    <h5 class="mb-3">Order Summary</h5>

                    <!-- Hiển thị sản phẩm trong giỏ hàng -->
                    @if(session('cart') && count(session('cart')) > 0)
                    @foreach(session('cart') as $item)
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <img src="{{ $item['product']['image'] }}" alt="{{ $item['product']['name'] }}" class="img-fluid rounded" style="width: 50px; height: 50px; object-fit: cover;">
                        <div>
                            <p class="mb-0"></p>
                            <h6 class="text-muted">Quantity: {{ $item['quantity'] }}</h6>
                        </div>
                        <p class="price mb-0">$ {{ $item['product']['price'] }}</p>
                    </div>
                    @endforeach
                    @else
                    <p class="text-muted">Your cart is empty.</p>
                    @endif

                    <hr>

                    <!-- Total -->
                    <div class="d-flex justify-content-between">
                        <p class="total">Total</p>
                        <p class="total">$ {{ App\Models\Cart::totalAmount($item) }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection