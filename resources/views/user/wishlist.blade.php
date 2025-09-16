@extends('layouts.layout')


@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center">My Wishlist 🤍</h2>

    <div class="row g-4">
        <!-- Product Card 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100 position-relative">
                <!-- Remove Button (Top Right) -->
                <button class="btn btn-light shadow-sm position-absolute top-0 end-0 m-3" title="Remove">
                    <i class="bi bi-x-lg text-primary">x</i>
                </button>

                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Product">
                <div class="card-body text-center">
                    <h5 class="card-title">Product One</h5>
                    <p class="card-text fw-bold text-primary">$49.99</p>
                    <a href="#" class="btn btn-sm btn-success w-100">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100 position-relative">
                <button class="btn btn-light rounded-circle shadow-sm position-absolute top-0 end-0 m-2" title="Remove">
                    <i class="bi bi-x-lg text-danger"></i>
                </button>

                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Product">
                <div class="card-body text-center">
                    <h5 class="card-title">Product Two</h5>
                    <p class="card-text fw-bold text-primary">$79.99</p>
                    <a href="#" class="btn btn-sm btn-success w-100">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100 position-relative">
                <button class="btn btn-light rounded-circle shadow-sm position-absolute top-0 end-0 m-2" title="Remove">
                    <i class="bi bi-x-lg text-danger"></i>
                </button>

                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Product">
                <div class="card-body text-center">
                    <h5 class="card-title">Product Three</h5>
                    <p class="card-text fw-bold text-primary">$99.99</p>
                    <a href="#" class="btn btn-sm btn-success w-100">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Continue Shopping -->
    <div class="text-center mt-5">
        <a href="{{ url('/shop') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left"></i> Continue Shopping
        </a>
    </div>
</div>
@endsection
