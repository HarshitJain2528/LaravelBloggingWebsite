@extends('AdminFiles.layouts.main')

@section('admin-media-section')
    @include('AdminFiles.layouts.navbar')

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
