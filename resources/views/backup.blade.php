@extends('layouts.main')

@section('admin-backup-section')
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid justify-content-end">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.html">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.html">Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Backups & Maintenance Section -->
    <div class="container dashboard-content">
        <h2>Backups & Maintenance</h2>
        <div class="row">
            <!-- Backup Tools -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Backups</h5>
                        <p class="card-text">Tools for managing website backups.</p>
                        <button class="btn btn-primary">Create Backup</button>
                        <button class="btn btn-secondary">Restore Backup</button>
                    </div>
                </div>
            </div>
            <!-- Database Maintenance -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Database Maintenance</h5>
                        <p class="card-text">Tools for optimizing the database.</p>
                        <button class="btn btn-primary">Optimize Database</button>
                        <button class="btn btn-secondary">Backup Database</button>
                    </div>
                </div>
            </div>
            <!-- Cache Clearing -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cache Clearing</h5>
                        <p class="card-text">Tools for clearing cache and improving performance.</p>
                        <button class="btn btn-primary">Clear Cache</button>
                        <button class="btn btn-secondary">Refresh Cache</button>
                    </div>
                </div>
            </div>
            <!-- Other Maintenance Tools -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Other Maintenance</h5>
                        <p class="card-text">Additional tools for maintenance tasks.</p>
                        <button class="btn btn-primary">Task 1</button>
                        <button class="btn btn-secondary">Task 2</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
