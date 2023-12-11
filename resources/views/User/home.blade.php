@extends('User.layouts.main')

@section('user-homepage-section')
@include('User.layouts.navbar')
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
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1000x500" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-md-block">
          <div class="container">
            <h1 class="display-4">Welcome to Your Blog</h1>
            <p class="lead">Your go-to destination for insightful content on various topics.</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1000x500" class="d-block w-100" alt="Slide 3">
        <div class="carousel-caption d-md-block">
          <div class="container">
            <h1 class="display-4">Welcome to Your Blog</h1>
            <p class="lead">Your go-to destination for insightful content on various topics.</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
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
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 feature-card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Featured Image 1">
          <div class="card-body">
            <h3 class="card-title">Featured Title 1</h3>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 feature-card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Featured Image 2">
          <div class="card-body">
            <h3 class="card-title">Featured Title 2</h3>
            <p class="card-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 feature-card">
          <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Featured Image 3">
          <div class="card-body">
            <h3 class="card-title">Featured Title 3</h3>
            <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Explore Categories</h2>
      <div class="row">
        <div class="col-md-4">
          <ul class="category-list">
            <li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <!-- Add more categories -->
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="category-list">
            <li><a href="#">Category 4</a></li>
            <li><a href="#">Category 5</a></li>
            <li><a href="#">Category 6</a></li>
            <!-- Add more categories -->
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="category-list">
            <li><a href="#">Category 7</a></li>
            <li><a href="#">Category 8</a></li>
            <li><a href="#">Category 9</a></li>
            <!-- Add more categories -->
          </ul>
        </div>
      </div>
    </div>
  </section>

 @endsection
