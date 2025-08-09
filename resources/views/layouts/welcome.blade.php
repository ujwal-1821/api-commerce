@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Welcome to <span class="text-primary">TicketSys</span></h1>
        <p class="lead">Fast and simple support ticket management for your business</p>
    </div>

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
</div>
@endsection
