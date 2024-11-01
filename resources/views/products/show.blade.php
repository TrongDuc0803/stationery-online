@extends('layouts.master')
@section('title', $product->title)
@section('content')

@if (session()->has('addedToCart'))
<section class="pop-up" id="popup">
  <div class="pop-up-box">
    <div class="pop-up-title">
      {{ session()->get('addedToCart') }}
    </div>
    <div class="pop-up-actions">
      <button class="btn btn-outlined" onclick="closePopup()">Continue Shopping</button>
      <a href="{{ route('cart') }}" class="btn btn-primary">Go To Cart</a>
    </div>
  </div>
</section>
@endif

<div class="container mt-5">
  <div class="row">
    <!-- Image Section -->
    <div class="col-md-6 text-center">
      <div class="product-image-gallery">
        <img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-fluid mb-3 main-image">
      </div>
    </div>

    <!-- Product Details Section -->
    <div class="col-md-6">
      <h2>{{ $product->title }}</h2>
      <p class="text-muted">Price: <strong>${{ $product->price }}</strong></p>
      
      <!-- Color Selection -->
      <div class="color-selection mb-3">
        <label for="color">Color: </label>
        <select id="color" name="color" class="form-control w-50">
          <option value="light-pink">Light Pink</option>
          <option value="white">White</option>
          <option value="gray">Gray</option>
        </select>
      </div>

      <!-- Quantity and Add to Cart Button -->
      <form action="{{ route('addToCart', $product->id) }}" method="post">
        @csrf
        <div class="d-flex align-items-center mb-4">
          <label for="quantity">Quantity:</label>
          <input type="number" name="quantity" class="form-control w-25 ms-2" value="1" min="1">
          <button class="btn btn-dark ms-3">Add to Cart</button>
        </div>
      </form>

      <!-- Description Section -->
      <div class="description-section mt-4">
        <h4 class="description-title">Description: </h4>
        <div class="feature-list">
          <p>{{ $product->description }}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    function closePopup() {
        const popup = document.getElementById('popup');
        popup.style.display = 'none';
    }
</script>

@endsection
