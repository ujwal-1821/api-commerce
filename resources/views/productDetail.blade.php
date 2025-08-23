@extends('layouts.master')

@push('title')
<title>Product Detail</title>
@endpush

@section('content')
<div class="container py-5">

    <!-- Product Details -->
    <div class="row">
        <!-- Left: Image -->
        <div class="col-md-5">
            <div class="border rounded p-3 shadow-sm bg-white">
                <img src="{{ asset('assets/images/img12.jpg') }}" 
                     class="img-fluid rounded" 
                     alt="Samsung 55 Smart TV" 
                     loading="lazy">
            </div>
        </div>

        <!-- Right: Info -->
        <div class="col-md-7">
            <h3 class="fw-bold mb-2">Samsung 55" Smart TV</h3>
            <p class="text-muted mb-1">Short Description: Ultra HD Smart TV with HDR10+</p>

            <!-- Rating -->
            <div class="mb-2">
                <span class="text-warning fs-5">★★★★☆</span>
                <small class="text-muted">(4.2 / 5 from 120 ratings)</small>
            </div>

            <!-- Price -->
            <h4 class="text-success fw-bold mb-3">$499.99</h4>

            <!-- Description -->
            <p>
                Enjoy breathtaking picture quality with the Samsung 55" Smart TV. 
                Equipped with HDR10+ technology, this TV brings vivid colors and stunning details to life. 
                Stream your favorite shows, movies, and sports effortlessly with built-in smart apps.
            </p>

            <!-- Buttons -->
            <div class="d-flex gap-3 mt-4">
                <a href="#" class="btn btn-primary btn-lg">Add to Cart</a>
                <a href="#" class="btn btn-outline-secondary btn-lg">Buy Now</a>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="mt-5">
        <h4 class="fw-semibold mb-4">Customer Reviews</h4>

        @php
            $reviews = [
                [
                    'name' => 'John Doe',
                    'rating' => '★★★★☆',
                    'text' => 'Great picture quality, and the sound is excellent for a built-in speaker.',
                    'date' => 'Jan 15, 2025'
                ],
                [
                    'name' => 'Sarah Lee',
                    'rating' => '★★★☆☆',
                    'text' => 'Good value for the price, but the remote control could be better.',
                    'date' => 'Feb 02, 2025'
                ]
            ];
        @endphp

        @foreach($reviews as $review)
            <div class="border rounded p-3 mb-3 shadow-sm">
                <strong>{{ $review['name'] }}</strong> 
                <span class="text-warning">{{ $review['rating'] }}</span>
                <p class="mb-1">{{ $review['text'] }}</p>
                <small class="text-muted">Reviewed on {{ $review['date'] }}</small>
            </div>
        @endforeach

        <a href="#" class="btn btn-outline-primary btn-sm">Write a Review</a>
    </div>

    <!-- Similar Products -->
    <div class="mt-5">
        <h4 class="fw-semibold mb-4">Similar Products</h4>
        <div class="row">
            @php
                $products = [
                    ['name' => 'LG 50" Smart TV', 'price' => '$399.99', 'img' => 'img1.jpg'],
                    ['name' => 'Sony Bravia 55"', 'price' => '$549.99', 'img' => 'img2.jpg'],
                    ['name' => 'Panasonic 50" 4K TV', 'price' => '$429.99', 'img' => 'img3.jpg'],
                    ['name' => 'Samsung 43" Smart TV', 'price' => '$349.99', 'img' => 'img4.jpg'],
                ];
            @endphp

            @foreach($products as $product)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <img src="{{ asset('assets/images/' . $product['img']) }}" 
                             class="card-img-top" 
                             alt="{{ $product['name'] }}" 
                             loading="lazy">
                        <div class="card-body text-center">
                            <h6 class="fw-semibold">{{ $product['name'] }}</h6>
                            <p class="text-success fw-bold mb-1">{{ $product['price'] }}</p>
                            <a href="#" class="btn btn-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
