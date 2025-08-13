@extends('layouts.master')

@push('title')
<title>category</title>
    
@endpush

@section('content')
<section class="container-fluid my-0">
      {{-- Category Banner --}}
    <div class="mb-0">
        <div class="p-5 text-center text-white rounded" style="background: linear-gradient(135deg, #47505e, #63949d);">
            <h3 class="fw-bold mb-2">Explore the Best Electronics</h3>
            <p class="mb-0">Hand-picked gadgets with the best deals, just for you.</p>
        </div>
    </div>
    {{-- Heading --}}
    <div class=" my-3 mb-4">
        <h2 class="fw-bold text-center"><i class="bi bi-justify"></i> Category</h2>
    </div>

  

    {{-- Product Grid (Static) --}}
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img12.jpg') }}" class="card-img-top" alt="Wireless Earbuds">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Gaming</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img9.jpg') }}" class="card-img-top" alt="Smart Watch">
                <div class="card-body text-center">
                     <h5 class="fw-semibold">SmartPhone</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img10.jpg') }}" class="card-img-top" alt="Bluetooth Speaker">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Tablets</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img12.jpg') }}" class="card-img-top" alt="Gaming Mouse">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Storage</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img9.jpg') }}" class="card-img-top" alt="Gaming Mouse">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Laptop and Accessiors</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img10.jpg') }}" class="card-img-top" alt="Gaming Mouse">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Comuter</h5>
                 <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img10.jpg') }}" class="card-img-top" alt="Gaming Mouse">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">PowerBank</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img9.jpg') }}" class="card-img-top" alt="Gaming Mouse">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Camera & Accesiors</h5>
                    <a href="{{ url('electronics/categoryName') }}" class="btn btn-success btn-sm">View Details</a>
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
