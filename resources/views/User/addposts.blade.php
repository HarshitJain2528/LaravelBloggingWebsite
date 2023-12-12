@extends('User.layouts.main')

@section('user-addposts-section')
    @include('User.layouts.navbar')

    <!-- Add Post Form -->
    <div class="container">
        <div class="add-post-container settingsCard">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h2 class="text-center mb-4">Add New Post</h2>
            <form action="{{ url('store-blog') }}" method="POST" enctype="multipart/form-data">
                @csrf <!-- Add CSRF token for security -->

                <!-- User ID Field -->
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                <div class="mb-3">
                    <label for="postTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="postTitle" name="title" placeholder="Enter the post title" required>
                </div>
                <div class="mb-3">
                    <label for="postContent" class="form-label">Content</label>
                    <textarea class="form-control" id="postContent" name="content" rows="6" placeholder="Enter the post content" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="postImage" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="postImage" name="image" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="postCategory" class="form-label">Category</label>
                    <select class="form-select" id="postCategory" name="category_id" required>
                        <option selected disabled>Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->categoryname }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
@endsection