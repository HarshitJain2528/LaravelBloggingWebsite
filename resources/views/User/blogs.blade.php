@extends('User.layouts.main')

@section('user-blogs-section')
    @include('User.layouts.navbar')

    <div class="container">
      <div class="category-filter">
        <!-- Category Dropdown Filter -->
        <form action="{{ url('user/blogs') }}" method="GET">
            <select name="category" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                        {{ $category->categoryname }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="blog-container settingsCard" >
      @if(!$selectedCategory)
        {{ $posts->links('pagination::bootstrap-5') }}
      @endif
        @foreach ($posts as $post)
            <div class="blog-card" >
                <img src="{{ asset($post->image) }}" alt="Blog Image" class="blog-image">
                <h2 class="blog-title">{{ $post->title }}</h2>
                <p class="blog-excerpt">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ url('user/showblogs/' . $post->id) }}" class="read-more-btn">Read More</a>
            </div>
        @endforeach
    </div>
    </div>
    
@endsection
