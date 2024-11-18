@extends('layouts.master')
@section('title', 'My Account')
@section('content')

<div class="container my-5">
    <div class="row">
        <!-- Thông tin người dùng -->
        <div class="col-lg-4 mb-4">
            <div class="card border-0">
                <div class="card-header bg-primary text-white text-center rounded-top">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body bg-light text-center">
                    
                    <p class="mb-2"><strong>Name:</strong> {{ auth()->user()->name }}</p>
                    <p class="mb-3"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <form action="{{ route('logout') }}" method="post" class="mt-3">
                        @csrf
                        <button class="btn btn-danger w-100">Log Out</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Danh sách đơn hàng -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5>Order History</h5>
                </div>
                <div class="card-body">
                    @if (auth()->user()->orders && auth()->user()->orders->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (auth()->user()->orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ is_countable($order->items) ? $order->items->count() : 0 }}</td>

                                    <td>${{ $order->total }}</td>
                                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $order->status }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-center text-muted">You haven't placed any orders yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection