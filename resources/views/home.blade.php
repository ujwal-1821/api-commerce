@extends('layouts.master')
@section('content')
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
            <h3 class="fw-bold mb-1">🔥 Top Deals</h3>
            <a href="#" class="btn btn-success btn-sm px-3">View All</a>
        </div>
        <div class="row">
            <!-- Deal 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100 border-0 flip-card">
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
    <section class="container my-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class=" mb-1">Best of Electronics</h3>
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
    <!-- Recent View Section -->
    <section class="container my-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class=" mb-0">Recently viewed</h3>
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

    <script>
        document.querySelectorAll('.card-img-top').forEach(img => {
            img.addEventListener('click', () => {
                img.classList.toggle('rotated');
            });
        });
    </script>
@endsection
