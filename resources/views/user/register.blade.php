@extends('layouts/layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm p-4" style="max-width: 450px; width: 100%;">
        <h3 class="mb-3 text-center">Sign Up</h3>
        <form action="{{ route('user.processRegister') }}"method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="John" name="firstName">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Doe" name="lastName">
                </div>
                <div class="col-12">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com" name="email">

                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="********" name="password">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="********" name="password_confirmation" id="password_confirmation">
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100 mt-3">Create Account</button>
        </form>
        <p class="text-center mt-3 small">
            Already have an account? <a href="{{  route('user.login') }}">Login</a>
        </p>
    </div>
</div>
@endsection
