@extends('layouts.main')

@section('admin-comments-section')
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

    <!-- Comments Section -->
    <div class="container dashboard-content">
        <div class="comments-section">
            <h2>All Comments</h2>
            <ul class="comments-list">
                <!-- Sample Comments (Replace with actual data) -->
                <li class="approved">
                    <p>Comment 1 - Approved</p>
                    <div class="comment-actions">
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <li class="pending">
                    <p>Comment 2 - Pending</p>
                    <div class="comment-actions">
                        <button class="btn btn-sm btn-success">Approve</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <!-- ... Add more comments ... -->
            </ul>
        </div>

        <div class="comments-section">
            <h2>Pending Comments</h2>
            <ul class="comments-list">
                <!-- Pending Comments (Replace with actual data) -->
                <li class="pending">
                    <p>Comment 3 - Pending</p>
                    <div class="comment-actions">
                        <button class="btn btn-sm btn-success">Approve</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <!-- ... Add more pending comments ... -->
            </ul>
        </div>

        <div class="comments-section">
            <h2>Approved Comments</h2>
            <ul class="comments-list">
                <!-- Approved Comments (Replace with actual data) -->
                <li class="approved">
                    <p>Comment 4 - Approved</p>
                    <div class="comment-actions">
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </div>
                </li>
                <!-- ... Add more approved comments ... -->
            </ul>
        </div>
    </div>
@endsection
