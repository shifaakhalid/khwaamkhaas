@extends('layouts/layout')

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
            <h3 class="mb-3 text-center">Login</h3>

         
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            
            @if ($errors->any() && !$errors->has('email') && !$errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('user.authenticate') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Enter email" name="email" id="email">
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Enter password" name="password" id="password">
                    @error('password')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember" class="form-check-label">Remember me</label>
                    </div>
                    <a href="#" class="small text-decoration-none">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-dark w-100">Login</button>
            </form>
            <p class="text-center mt-3 small">
                Don’t have an account? <a href="{{ route('user.register') }}">Sign up</a>
            </p>
        </div>
    </div>
@endsection
