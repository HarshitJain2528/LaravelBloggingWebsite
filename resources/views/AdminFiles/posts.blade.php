@extends('AdminFiles.layouts.main')

@section('admin-posts-section')

    @include('AdminFiles.layouts.navbar')

    <div class="container dashboard-content">
        <h2>All Posts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Post Rows (Replace with actual data) -->
                <tr>
                    <td>Sample Post 1</td>
                    <td>John Doe</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Sample Post 2</td>
                    <td>Jane Smith</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <!-- ... Add more rows for actual posts ... -->
            </tbody>
        </table>
        
        <hr>

        <h2>Categories</h2>
        <ul class="list-group">
            <li class="list-group-item">Category 1</li>
            <li class="list-group-item">Category 2</li>
            <!-- ... Add more categories ... -->
        </ul>
    </div>
@endsection
