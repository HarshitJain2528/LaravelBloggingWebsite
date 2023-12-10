<!-- Updated Blade File -->
@extends('AdminFiles.layouts.main')

@section('admin-comments-section')
    @include('AdminFiles.layouts.navbar')

    <!-- Comments Section -->
    <div class="container dashboard-content">
        <div class="comments-section">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h2>All Comments</h2>
            <ul class="comments-list">
                @foreach($comments as $comment)
                    <li class="approved">
                        <p>Comments: {{ $comment->comments }}</p>
                        <p>Post Title: {{ $comment->post->title }}</p>
                        <p>Post Category: {{ $comment->category->categoryname }}</p>
                        <div class="comment-actions">
                            <a href="{{route('comments.delete', $comment->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <hr>

        <!-- Pagination Links inside a div -->
        <div class="pagination-links">
            {{ $comments->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
