@extends('User.layouts.main')

@section('user-profile-section')
  @include('User.layouts.navbar')
  <!-- Profile Header -->
  <header class="profile-header">
    <img src="https://via.placeholder.com/150" alt="Profile Avatar" class="profile-avatar">
    <div class="profile-name">John Doe</div>
    <div class="profile-bio">Blogger | Passionate Writer | Coffee Lover</div>
    <div class="profile-stats">
      <div class="stat">Posts: 50</div>
      <div class="stat">Followers: 1000</div>
      <div class="stat">Following: 200</div>
    </div>
    <a href="#" class="btn profile-edit-btn">Edit Profile</a>
  </header>

  <!-- User Posts -->
  <section class="container">
    <h2 class="text-center my-4">My Posts</h2>
    <div class="row post-list">
      <div class="col-md-4">
        <div class="card post-card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Post Image">
          <div class="card-body">
            <h3 class="card-title">Post Title 1</h3>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
      <!-- More posts can be added similarly -->
    </div>
  </section>
@endsection