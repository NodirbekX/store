@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">All Products</h1>

    <div class="row">
        {{-- Loop through the $products array passed from the controller --}}
        @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="#"> {{-- Later: href="{{ url('/products/' . $product['id']) }}" --}}
                        {{-- This uses the asset helper to find your images in the public/storage folder --}}
                        <img src="{{ asset('storage/products/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><a href="#" class="text-decoration-none text-dark">{{ $product['name'] }}</a></h5>
                        <p class="card-text">A short description of the product.</p>
                        <p class="fs-5 fw-bold">${{ $product['price'] }}</p>
                        <a href="#" class="btn btn-primary mt-auto">Add to Cart</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12"><p class="text-center">No products found.</p></div>
        @endforelse
    </div>
</div>
@endsection
