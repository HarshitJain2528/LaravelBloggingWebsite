@extends('layouts.main')

@section('admin-posts-section')
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

    <div class="container dashboard-content">
        <h2>All Posts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Post Rows (Replace with actual data) -->
                <tr>
                    <td>Sample Post 1</td>
                    <td>John Doe</td>
                    <td>2023-01-15</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Sample Post 2</td>
                    <td>Jane Smith</td>
                    <td>2023-02-20</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <!-- ... Add more rows for actual posts ... -->
            </tbody>
        </table>

        <hr>

        <h2>Add New Post</h2>
        <!-- Form or editor for creating a new blog post with text editor and media upload options -->
        <!-- You can use rich text editors like TinyMCE or CKEditor for this section -->

        <hr>

        <h2>Categories</h2>
        <ul class="list-group">
            <li class="list-group-item">Category 1</li>
            <li class="list-group-item">Category 2</li>
            <!-- ... Add more categories ... -->
        </ul>
    </div>
@endsection
