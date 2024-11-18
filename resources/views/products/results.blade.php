@extends('layouts.master')
@section('title', 'Search Results')
@section('content')
<main>
    <!-- Banner Section -->
    <section class="banner mb-4">
        <div class="container-fluid px-0 text-center">
            <h1 class="my-4">Search Results</h1>
            <p class="lead">Found {{ $results->count() }} results for "{{ request('query') }}"</p>
        </div>
    </section>

    <!-- Products Section -->
    <div class="container my-4">
        @if($results->count() > 0)
        <div class="row row-cols-1 row-cols-md-4 g-5">
            @foreach($results as $product)
            <div class="col">
                <div class="card h-100 position-relative">
                    <a href="{{ route('product.show', ['categoryName' => $product->category->name, 'productName' => $product->title]) }}" class="product-link text-decoration-none text-dark">
                        <div class="card-img-top position-relative">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title" title="{{ $product->title }}">{{ $product->title }}</h6>
                            <h5 class="price ">From ${{ number_format($product->price, 2) }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-5">
            <p class="text-muted">No results found for "{{ request('query') }}"</p>
        </div>
        @endif
    </div>
</main>

@endsection