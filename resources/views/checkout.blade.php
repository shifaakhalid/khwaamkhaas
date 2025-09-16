@extends('layouts/layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Billing Details -->
        <div class="col-lg-7">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Billing Details</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="John">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Doe">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="you@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="123 Main St">
                            </div>
                            <div class="col-md-6 pb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="Karachi">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Postal Code</label>
                                <input type="text" class="form-control" placeholder="74000">
                            </div>
                            {{-- <div class="col-md-6"> --}}
                                {{-- <label class="form-label">Country</label>
                                <select class="form-select">
                                    <option selected disabled>Choose...</option>
                                    <option>Pakistan</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Canada</option> --}}
                                </select>
                            {{-- </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-5">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Order Summary</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product 1</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">1500</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product 2</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">2500</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Subtotal</span>
                            <strong>4000</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Shipping</span>
                            <strong>5000</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total</span>
                            <strong>4500</strong>
                        </li>
                    </ul>

                    <!-- Payment Options -->
                    <h4 class="mb-3">Payment</h4>
                    <form>
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked>
                            <label class="form-check-label" for="credit">COD</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input">
                            <label class="form-check-label" for="debit">Credit Card</label>
                        </div>
                        <div class="form-check mb-3">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                            <label class="form-check-label" for="paypal">Easypaisa</label>
                        </div>

                        <button class="btn btn-dark w-100" type="submit">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
