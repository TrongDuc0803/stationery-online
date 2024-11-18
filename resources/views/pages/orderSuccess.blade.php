@extends('layouts.master')

@section('title', 'Order Success')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Success Message -->
            <div class="text-center mb-4">

                <h1 class="text-success mt-3">Thank You!</h1>
                <p>Your order has been successfully placed.</p>
            </div>

            <!-- Order Details -->
            <div class="order-summary border rounded p-4 bg-light">
                <h4 class="text-primary mb-3">Order Summary</h4>
                <p><strong>Order ID:</strong> {{ $order->id }}</p>
                <p><strong>Name:</strong> {{ $order->name }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p><strong>Address:</strong> {{ $order->address }}</p>
                <p><strong>City:</strong> {{ $order->city }}</p>
                <p><strong>Total Amount:</strong> ${{ number_format($order->total, 2) }}</p>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>

<style>
    .order-summary p {
        margin-bottom: 0.5rem;
    }

    .order-summary strong {
        font-weight: 600;
    }

    .list-group-item {
        border: none;
    }
</style>
@endsection
