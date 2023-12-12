@extends('User.layouts.main')

@section('user-showblog-section')
  @include('User.layouts.navbar')
  <div class="container">
    @foreach ($blogs as $blog)
      <div class="blog-container">
        <img src="{{asset($blog->image)}}" alt="Blog Image" class="blog-image">
        <h2 class="blog-title">{{$blog->title}}</h2>
        <p class="blog-content">{{$blog->content}}</p>
        <div class="like-comment-buttons">
          <button class="like-button"><i class="fas fa-heart"></i></button>
          <button class="comment-button"><i class="fas fa-comment"></i></button>
        </div>
      </div>
      
    @endforeach
  </div>
@endsection
