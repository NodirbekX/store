@extends('layouts.app')

@section('title', 'Welcome to Our Store')

@section('content')
{{-- Hero Section --}}
<div class="container-fluid bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Discover Our New Collection</h1>
        <p class="lead">High-quality products curated just for you.</p>
        <a href="{{ route('shop.index') }}" class="btn btn-primary btn-lg mt-3">Shop Now</a>
    </div>
</div>

{{-- Featured Products Section --}}
<div class="container my-5">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
        @forelse ($featuredProducts as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="#"> {{-- Later: href="{{ url('/products/' . $product['id']) }}" --}}
                        <img src="{{ asset('storage/products/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="#" class="text-decoration-none text-dark">{{ $product['name'] }}</a>
                        </h5>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <p class="fs-5 fw-bold m-0">${{ $product['price'] }}</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-muted">No featured products are available at the moment.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection