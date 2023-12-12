@extends('User.layouts.main')

@section('user-showblog-section')
  @include('User.layouts.navbar')
  <div class="container">
    @foreach ($blogs as $blog)
      <div class="blog-container settingsCard">
        <img src="{{asset($blog->image)}}" alt="Blog Image" class="blog-image">
        <h2 class="blog-title">{{$blog->title}}</h2>
        <p class="blog-content">{{$blog->content}}</p>
        <div class="like-comment-buttons">
        <button class="like-button" data-blog-id="{{ $blog->id }}" data-like-check-url="{{ route('blog.checkLikeStatus', ['blog' => $blog->id]) }}" data-toggle-like-url="{{ route('blog.toggleLike', ['blog' => $blog->id]) }}">
          <i class="far fa-heart"></i>
        </button>
        <button class="comment-button"><i class="fas fa-comment"></i></button>
        </div>
      </div>
    @endforeach
  </div>

  <style>
    /* Define the styles for the empty and filled heart icon */
    .like-button {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 20px;
    }

    .like-button .far {
      color: #ccc; /* Color for the empty heart */
    }

    .like-button.liked .far {
      display: none; /* Hide the empty heart icon when 'liked' */
    }

    .like-button.liked .fas {
      color: red; /* Color for the filled heart when 'liked' class is present */
    }
  </style>
  <script>
    window.csrfToken = '{{ csrf_token() }}';
</script>
@endsection
