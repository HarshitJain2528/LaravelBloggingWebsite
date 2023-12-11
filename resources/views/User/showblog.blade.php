@extends('User.layouts.main')

@section('user-showblog-section')
  @include('User.layouts.navbar')
  <div class="container">
    <div class="blog-container">
      <img src="https://via.placeholder.com/800x400.png" alt="Blog Image" class="blog-image">
      <h2 class="blog-title">Blog Title</h2>
      <p class="blog-content">
        <!-- Place the content of your blog post here -->
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
      </p>
      <div class="like-comment-buttons">
        <button class="like-button"><i class="fas fa-heart"></i></button>
        <button class="comment-button"><i class="fas fa-comment"></i></button>
      </div>
    </div>
  </div>
@endsection
