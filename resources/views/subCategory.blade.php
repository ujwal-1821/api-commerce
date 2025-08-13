@extends('layouts.master')

@push('title')
<title>subcategory</title>

@endpush

@section('content')
<section class="container-fluid my-0">

      {{-- Banner --}}
      <div class="mb-0">
        <div class="p-5 text-center text-white rounded" style="background: linear-gradient(135deg, #47505e, #63949d);">
            <h3 class="fw-bold mb-2">Explore the Best Electronics</h3>
            <p class="mb-0">Hand-picked gadgets with the best deals, just for you.</p>
        </div>
    </div>
    {{-- Heading --}}
    <div class="d-flex justify-content-between align-items-center my-4 mb-3">
        <h2 class="fw-bold text-primary">Electronics → TV</h2>
        <a href="{{ url('category/electronics') }}" class="btn btn-outline-secondary btn-sm">← Back to Electronics</a>
    </div>

  

    {{-- Product Grid (Static) --}}
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img9.jpg') }}" class="card-img-top" alt="Smart TV 1">
                <div class="card-body text-center">
                    <h6 class="fw-semibold">Samsung 55" Smart TV</h6>
                    <p class="text-success fw-bold mb-1">$499.99</p>
                    <a href="{{ url('categoryName/productName')}}" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img10.jpg') }}" class="card-img-top" alt="Smart TV 2">
                <div class="card-body text-center">
                    <h6 class="fw-semibold">LG 65" 4K Ultra HD</h6>
                    <p class="text-success fw-bold mb-1">$799.99</p>
                    <a href="{{ url('categoryName/productName')}}" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img12.jpg') }}" class="card-img-top" alt="Smart TV 3">
                <div class="card-body text-center">
                    <h6 class="fw-semibold">Sony Bravia 50"</h6>
                    <p class="text-success fw-bold mb-1">$599.99</p>
                    <a href="{{ url('categoryName/productName')}}" class="btn btn-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('assets/images/img9.jpg') }}" class="card-img-top" alt="Smart TV 4">
                <div class="card-body text-center">
                    <h6 class="fw-semibold">TCL Roku 43"</h6>
                    <p class="text-success fw-bold mb-1">$349.99</p>
                    <a href="{{ url('categoryName/productName')}}" class="btn btn-primary btn-sm">View Details</a>
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
