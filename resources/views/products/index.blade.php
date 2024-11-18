@extends('layouts.master')
@section('title',$category->name)
@section('content')
<main>
    <!-- Banner Section -->
    <section class="banner mb-4">
        <div class="container-fluid px-0">
            <img src="https://scooboo.in/cdn/shop/files/smileyworld_banner.gif?v=1718893058&width=1440" alt="Banner Image" class="img-fluid w-100">
            <div class="banner-text text-center position-absolute w-100" style="top: 50%; transform: translateY(-50%); color: white;">
            </div>
        </div>
    </section>
    <h3></h3>
    <div class="container my-4 mt-5">
        <div class="row row-cols-1 row-cols-md-4 g-5">
            @foreach($category->products as $product)
            <div class="col">
                <div class="card h-100 position-relative">
                    <a href="{{ route('product.show', ['categoryName' => $category->name, 'productName' => $product->title]) }}" class="text-decoration-none text-dark">
                        <img src="{{ $product->image }}" class="card-img-top" alt="Product Image">
                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title">{{ $product->title }}</h6>
                            <h5 class="price">From  $ {{ $product->price }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

<style>
    .product-link {
        color: inherit;
        text-decoration: none;
    }

    .product-link:hover {
        color: inherit;
        text-decoration: none;
    }
</style>
@endsection
