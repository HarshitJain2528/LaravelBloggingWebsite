@extends('layouts.main')

@section('admin-notification-section')
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

    <!-- Notifications & Alerts Section -->
    <div class="container dashboard-content">
        <h2>Notifications & Alerts</h2>
        <div class="row">
            <!-- Admin Notifications -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Notifications</h5>
                        <p class="card-text">Settings for admin-related notifications.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="adminNotifications" checked>
                            <label class="form-check-label" for="adminNotifications">
                                Enable Admin Notifications
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="adminEmailNotifications" checked>
                            <label class="form-check-label" for="adminEmailNotifications">
                                Receive Email Notifications
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Activity Notifications -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Activity Notifications</h5>
                        <p class="card-text">Settings for user activity notifications.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="userActivityNotifications" checked>
                            <label class="form-check-label" for="userActivityNotifications">
                                Enable User Activity Notifications
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="userEmailNotifications" checked>
                            <label class="form-check-label" for="userEmailNotifications">
                                Receive Email Notifications
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- System Alerts -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">System Alerts</h5>
                        <p class="card-text">Settings for system-wide alerts.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="systemAlerts" checked>
                            <label class="form-check-label" for="systemAlerts">
                                Enable System Alerts
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="systemEmailNotifications" checked>
                            <label class="form-check-label" for="systemEmailNotifications">
                                Receive Email Notifications
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
