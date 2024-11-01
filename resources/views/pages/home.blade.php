@extends('layouts.master')
@section('title','Stationery Online')
@section('content')
<main>
    <!-- Banner Section -->
    <section class="banner mb-4">
        <div class="container-fluid">
            <img src="https://scooboo.in/cdn/shop/files/newtheme_main_banner_4.jpg?v=1715923444&width=2400" alt="Banner Image"
                class="img-fluid">
        </div>
    </section>

    <!-- Products Section -->
    <section class="products">
        <div class="container text-center">
            <h2>Elevate Your Workspace with Premium Stationery</h2>
            <div class="row">
                @foreach( $categories as $category )
                <div class="col-6 col-md-4 col-lg-2 mb-4 background-image">
                    <a href="{{ route('category.products', $category->name) }}">
                        <img src="{{$category->image}}" loading="lazy" alt="Eraser" class="img-fluid">
                    </a>
                    <p>{{ $category->name }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Carousel Section -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://scooboo.in/cdn/shop/files/Pilot_banner-new_launch_r.jpg?v=1724129977&width=2400" alt="1"
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://scooboo.in/cdn/shop/files/laurel_banner_2.jpg?v=1723093037&width=2400" alt="2"
                    class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://scooboo.in/cdn/shop/files/new_arrival-01-01.jpg?v=1723438724&width=2400" alt="3"
                    class="d-block w-100">
            </div>
        </div>
    </div>

</main>
@endsection