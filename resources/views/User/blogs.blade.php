@extends('User.layouts.main')

@section('user-blogs-section')
  @include('User.layouts.navbar')
  <div class="blog-container">
    <div class="blog-card">
      <img src="https://via.placeholder.com/800x400.png" alt="Blog Image" class="blog-image">
      <h2 class="blog-title">Blog Title 1</h2>
      <p class="blog-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="read-more-btn">Read More</a>
    </div>

    <div class="blog-card">
      <img src="https://via.placeholder.com/800x400.png" alt="Blog Image" class="blog-image">
      <h2 class="blog-title">Blog Title 2</h2>
      <p class="blog-excerpt">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#" class="read-more-btn">Read More</a>
    </div>

    <div class="blog-card">
      <img src="https://via.placeholder.com/800x400.png" alt="Blog Image" class="blog-image">
      <h2 class="blog-title">Blog Title 3</h2>
      <p class="blog-excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <a href="#" class="read-more-btn">Read More</a>
    </div>
  </div>
@endsection
