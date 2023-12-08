@extends('layouts.main')

@section('admin-dashboard-section')
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid justify-content-end">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container dashboard-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-primary text-white dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Posts</h5>
                        <p class="card-text">123</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-success text-white dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Comments</h5>
                        <p class="card-text">456</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-warning text-dark dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">789</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title">Site Statistics</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection