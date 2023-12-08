@extends('layouts.main')

@section('admin-media-section')
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

    <!-- Media Library Section -->
    <div class="container dashboard-content">
        <h2>Media Library</h2>
        <div class="row">
            <!-- Sample Media Items (Replace with actual data) -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Media Item">
                    <div class="card-body">
                        <p class="card-text">Image 1</p>
                        <div class="media-actions">
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <video controls class="card-img-top" style="height: 150px;">
                        <source src="https://www.sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <p class="card-text">Video 1</p>
                        <div class="media-actions">
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... Add more media items ... -->
        </div>
    </div>
@endsection
