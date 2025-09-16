@extends('layouts/layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="list-group shadow-sm">
                <a href="#" class="list-group-item list-group-item-action active">
                    <i class="bi bi-person-circle me-2"></i> Profile
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="bi bi-gear me-2"></i> Account Settings
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="bi bi-bag me-2"></i> Orders
                </a>
                <a href="{{ route('user.logout') }}" 
                class="list-group-item list-group-item-action">
                    <i class="bi bi-box-arrow-right me-2"></i>
                     Logout
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <!-- Profile Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle me-3" alt="User">
                        <div>
                            <h5 class="mb-0">{{ $user->firstName }} {{ $user->lastName }}</h5>
                            <small class="text-muted">{{ $user->email}}</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Settings -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h4 class="mb-3">Account Settings</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="John">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="Doe">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="johndoe@example.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="********">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="********">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark mt-3">Update Profile</button>
                    </form>
                </div>
            </div>

            <!-- Order History -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3">Order History</h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#ORD1234</td>
                                    <td>2025-09-01</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>$120</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>#ORD5678</td>
                                    <td>2025-08-20</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>$85</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>#ORD9101</td>
                                    <td>2025-08-10</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td>$60</td>
                                    <td><a href="#" class="btn btn-sm btn-outline-dark">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
