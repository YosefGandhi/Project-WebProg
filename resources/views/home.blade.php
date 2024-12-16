@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
<div class="top-card-section">
    <img src="/images/f5.png" alt="Background Image">
    <div class="top-card-text">
        <h1>Welcome to CalmSpace</h1>
        <p>Take a moment to relax, breathe, and enjoy insightful articles tailored for your mental well-being.</p>
        <a href="#" class="btn custom-button btn-lg mt-3 px-4 py-2">
            Ceritakan Masalahmu
        </a>
    </div>
</div>

<!-- Our Service Section -->
<div class="text-center mt-5">
    <h2 class="fw-bold">Our Services</h2>
</div>
<div class="d-flex justify-content-center flex-wrap mt-4 card-container">
    <!-- Service 1: Garbage Pickup -->
    <div class="card mx-3 p-3"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
            <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">GG</h5>
            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur. Aliquet amet elementum.</p>
            <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Service 2: Dumpster Rental -->
    <div class="card mx-3 p-3"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
            <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">GG</h5>
            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur. Aliquet amet elementum.</p>
            <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Service 3: Waste Collection -->
    <div class="card mx-3 p-3"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
            <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">GG</h5>
            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur. Aliquet amet elementum.</p>
            <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection