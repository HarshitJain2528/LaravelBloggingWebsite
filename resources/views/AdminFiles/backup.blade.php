@extends('AdminFiles.layouts.main')

@section('admin-backup-section')
   <!-- Navbar -->
   @include('AdminFiles.layouts.navbar')

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
