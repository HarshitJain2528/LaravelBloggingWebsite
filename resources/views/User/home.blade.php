@extends('User.layouts.main')

@section('user-homepage-section')
@include('User.layouts.navbar')

@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
  
<!-- Hero Section with Image Slider -->
<section class="hero-section">
  <div id="heroCarousel" class="carousel slide position-relative mx-auto" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/1000x500" class="d-block w-100" alt="Slide 1">
        <div class="carousel-caption d-md-block">
          <div class="container">
            <h1 class="display-4">Welcome to Your Blog</h1>
            <p class="lead">Your go-to destination for insightful content on various topics.</p>
            <a href="{{url('user/login-form')}}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1000x500" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-md-block">
          <div class="container">
            <h1 class="display-4">Welcome to Your Blog</h1>
            <p class="lead">Your go-to destination for insightful content on various topics.</p>
            <a href="{{url('user/login-form')}}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1000x500" class="d-block w-100" alt="Slide 3">
        <div class="carousel-caption d-md-block">
          <div class="container">
            <h1 class="display-4">Welcome to Your Blog</h1>
            <p class="lead">Your go-to destination for insightful content on various topics.</p>
            <a href="{{url('user/login-form')}}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
      </div>
      <!-- Add more carousel items as needed -->
    </div>
     <!-- ...carousel items and content... -->
     <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>


<!-- Featured Section -->
<section class="container my-5">
  @php $counter = 0; @endphp
  @foreach ($posts as $post)
    @if ($counter % 3 == 0) <!-- Add a row after every 3 cards -->
      <div class="row mb-4">
    @endif

    <div class="col-md-4" >
      <div class="card mb-4 feature-card" id="settingsCard" style="height: 100%;">
        <img src="{{$post->image}}" class="card-img-top" alt="Featured Image 1">
        <div class="card-body" style="height: 150px;">
          <h3 class="card-title">{{Str::limit($post->title, 30)}}</h3>
          <p class="card-text">{{ Str::limit($post->content, 50) }}</p>
          <a href="#" class="btn btn-outline-primary">Read More</a>
        </div>
      </div>
    </div>
    
    @if (($counter + 1) % 3 == 0 || $loop->last) <!-- Close row after every 3 cards or at the end -->
      </div>
    @endif

    @php $counter++; @endphp
  @endforeach
</section>


  <!-- Categories Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Explore Categories</h2>
      <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
          <ul class="category-list">
            <li><a href="#">{{$category->categoryname}}</a></li>
          </ul>
        </div>
        @endforeach
      </div>
    </div>
  </section>

 @endsection
