@extends('User.layouts.main')

@section('user-profile-section')
  @include('User.layouts.navbar')
  
      
  <header class="profile-header">
    @foreach ($users as $user)
    <img src="https://via.placeholder.com/150" alt="Profile Avatar" class="profile-avatar">
    <div class="name">{{$user->name}}</div>
    @endforeach
    <div class="profile-stats">
      <div class="stat">Posts: {{$postCount}}</div>
    </div>
  </header>

  <section class="container">
    <h2 class="text-center my-4">My Posts</h2>
    <div class="row post-list">
      @foreach ($userPosts as $userPost)
        
      <div class="col-md-4">
        <div class="card post-card">
          <img src="{{$userPost->image}}" class="card-img-top" alt="Post Image">
          <div class="card-body">
            <h3 class="card-title">{{Str::limit($userPost->title, 30)}}</h3>
            <p class="card-text">{{Str::limit($userPost->title, 30)}}</p>
            <a href="{{ url('user/showblogs/' . $userPost->id) }}" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
        </div>
      @endforeach
      <!-- More posts can be added similarly -->
    </div>
  </section>
  
@endsection