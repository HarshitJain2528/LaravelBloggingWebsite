@extends('AdminFiles.layouts.main')

@section('admin-posts-section')

    @include('AdminFiles.layouts.navbar')

    <div class="container dashboard-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2>All Posts</h2>
        <div class="row justify-content-end mb-3">
            <div class="col-auto">
                <form action="{{ route('posts.search') }}" method="get">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" name="category" class="form-control form-control-sm" placeholder="Search by category...">
                        <button type="submit" class="btn btn-sm btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->categoryname }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <hr>

        <!-- Pagination Links inside a div -->
        <div class="pagination-links">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    
    </div>
@endsection
