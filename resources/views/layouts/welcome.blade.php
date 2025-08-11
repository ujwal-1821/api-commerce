@extends('layouts.app')

@section('content')
    <!-- Categories & Products Section -->
    <section class="container-fluid ">
        <!-- Category Bar -->
        <div class="bg-light shadow-sm py-3 mb-0 sticky-top" style="top: 56px; z-index: 1020;">
            <div class="d-flex justify-content-center flex-wrap">
                <a class="nav-link text-dark px-4" href="#">Mobile</a>
                <a class="nav-link text-dark px-4" href="#">Fashion</a>
                <a class="nav-link text-dark px-4" href="#">Electronics</a>
                <a class="nav-link text-dark px-4" href="#">Furniture</a>
                <a class="nav-link text-dark px-4" href="#">Grocery</a>
                <a class="nav-link text-dark px-4" href="#">Appliances</a>
            </div>
        </div>

        <!-- Carousel Section -->
        <section class="mb-0">
            <div id="homeCarousel" class="carousel slide shadow-sm" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/images/img9.jpg') }}" class="d-block w-100 carousel-img" alt="Banner 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/img10.jpg') }}" class="d-block w-100 carousel-img" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/images/img12.jpg') }}" class="d-block w-100 carousel-img" alt="Banner 2">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>
        <!-- Top Deals Section -->
        <section class="container my-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold mb-2">🔥 Top Deals</h3>
                <a href="#" class="btn btn-success btn-sm px-3">View All</a>
            </div>
            <div class="row">
                <!-- Deal 1 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('assets/images/img12.jpg') }}" class="card-img-top" alt="Product 1">
                        <div class="card-body text-center">
                            <h6 class="card-title fw-semibold">Wireless Earbuds</h6>
                            <p class="text-success fw-bold mb-0">$29.99</p>
                        </div>
                    </div>
                </div>

                <!-- Deal 2 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('assets/images/img9.jpg') }}" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h6 class="card-title fw-semibold">Smart Watch</h6>
                            <p class="text-success fw-bold mb-0">$49.99</p>
                        </div>
                    </div>
                </div>

                <!-- Deal 3 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('assets/images/img10.jpg') }}" class="card-img-top" alt="Product 3">
                        <div class="card-body text-center">
                            <h6 class="card-title fw-semibold">Bluetooth Speaker</h6>
                            <p class="text-success fw-bold mb-0">$19.99</p>
                        </div>
                    </div>
                </div>

                <!-- Deal 4 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <img src="{{ asset('assets/images/img12.jpg') }}" class="card-img-top" alt="Product 4">
                        <div class="card-body text-center">
                            <h6 class="card-title fw-semibold">Gaming Mouse</h6>
                            <p class="text-success fw-bold mb-0">$15.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Products Grid -->
        <div class="row">
            @forelse ($items as $item)
                <div class="col-md-4 mb-4">
                    <div class="card bg-light h-100 shadow-sm">
                        <img src="{{ $item['url'] ?? '#' }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] ?? 'No Title' }}</h5>
                            <p class="card-text">{{ $item['description'] ?? 'No Description Available' }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">No items found.</p>
            @endforelse
        </div>
    </section>
@endsection
