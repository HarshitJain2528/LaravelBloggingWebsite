@extends('AdminFiles.layouts.main')

@section('admin-comments-section')

    @include('AdminFiles.layouts.navbar')

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
