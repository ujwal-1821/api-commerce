@extends('layouts.master')
@push('title')
<title>product-detail</title>

@endpush
@section('content')
<div class="container py-5">

    <!-- Product Details -->
    <div class="row">
        <!-- Left: Image -->
        <div class="col-md-5">
            <div class="border rounded p-3 shadow-sm bg-white">
                <img src="{{ asset('assets/images/img9.jpg') }}" class="img-fluid rounded" alt="Samsung 55 Smart TV">
            </div>
        </div>

        <!-- Right: Info -->
        <div class="col-md-7">
            <h3 class="fw-bold mb-2">Samsung 55" Smart TV</h3>
            <p class="text-muted mb-1">Short Description: Ultra HD Smart TV with HDR10+</p>

            <!-- Rating -->
            <div class="mb-2">
                <span class="text-warning fs-5">
                    ★★★★☆
                </span>
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

        <div class="border rounded p-3 mb-3 shadow-sm">
            <strong>John Doe</strong> <span class="text-warning">★★★★☆</span>
            <p class="mb-1">Great picture quality, and the sound is excellent for a built-in speaker.</p>
            <small class="text-muted">Reviewed on Jan 15, 2025</small>
        </div>

        <div class="border rounded p-3 mb-3 shadow-sm">
            <strong>Sarah Lee</strong> <span class="text-warning">★★★☆☆</span>
            <p class="mb-1">Good value for the price, but the remote control could be better.</p>
            <small class="text-muted">Reviewed on Feb 02, 2025</small>
        </div>

        <a href="#" class="btn btn-outline-primary btn-sm">Write a Review</a>
    </div>

    <!-- Similar Products -->
    <div class="mt-5">
        <h4 class="fw-semibold mb-4">Similar Products</h4>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('assets/images/img1.jpg') }}" class="card-img-top" alt="Smart TV 2">
                    <div class="card-body text-center">
                        <h6 class="fw-semibold">LG 50" Smart TV</h6>
                        <p class="text-success fw-bold mb-1">$399.99</p>
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('assets/images/img2.jpg') }}" class="card-img-top" alt="Smart TV 3">
                    <div class="card-body text-center">
                        <h6 class="fw-semibold">Sony Bravia 55"</h6>
                        <p class="text-success fw-bold mb-1">$549.99</p>
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('assets/images/img2.jpg') }}" class="card-img-top" alt="Smart TV 3">
                    <div class="card-body text-center">
                        <h6 class="fw-semibold">Sony Bravia 55"</h6>
                        <p class="text-success fw-bold mb-1">$549.99</p>
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('assets/images/img2.jpg') }}" class="card-img-top" alt="Smart TV 3">
                    <div class="card-body text-center">
                        <h6 class="fw-semibold">Sony Bravia 55"</h6>
                        <p class="text-success fw-bold mb-1">$549.99</p>
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Add more similar products as needed -->
        </div>
    </div>
</div>
@endsection

