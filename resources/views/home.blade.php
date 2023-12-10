<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Homepage</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }
    .navbar-brand {
      font-size: 1.8rem;
      font-weight: bold;
      letter-spacing: 1px;
    }
    .navbar {
      padding: 25px 0;
      background-color: #f8f9fa; /* Light Gray */
      border-bottom: 1px solid #e9ecef; /* Light Gray border */
    }
    .navbar-toggler {
      border-color: #333; /* Darker Gray */
    }
    .navbar-toggler-icon {
      background-color: #333; /* Darker Gray */
    }
    .navbar-nav .nav-link {
      color: #333; /* Darker Gray */
      font-size: 1.2rem;
      text-transform: uppercase;
      margin-right: 25px;
      transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
      color: #f44336; /* Red */
    }
    .add-post-btn {
      background-color: #f44336;
      color: #fff;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .add-post-btn:hover {
      background-color: black;
    }
    .hero-section {
      background-image: url('https://via.placeholder.com/1600x800');
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 100px 0;
      text-align: center;
    }
    .hero-section h1 {
        color: black;
        font-size: 3.5rem;
        margin-bottom: 20px;
    }
    .hero-section p {
        color: black;
      font-size: 1.2rem;
      margin-bottom: 40px;
    }
    .feature-card {
      border: none;
      border-radius: 15px;
      transition: transform 0.3s ease-in-out;
    }
    .feature-card:hover {
      transform: translateY(-10px);
    }
    .feature-card img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 200px;
      object-fit: cover;
    }
    .feature-card .card-body {
      padding: 20px;
    }
    .feature-card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    .feature-card p {
      font-size: 1rem;
      color: #555;
    }
    .category-list li {
      list-style: none;
      margin-bottom: 10px;
    }
    .category-list a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s ease-in-out;
    }
    .category-list a:hover {
      color: #f44336;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Your Blog</a>
      <!-- Toggle button for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navigation links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link add-post-btn" aria-label="Add Post">
              <i class="fas fa-plus"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Welcome to Your Blog</h1>
      <p>Your go-to destination for insightful content on various topics.</p>
      <a href="#" class="btn btn-primary">Get Started</a>
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

  <!-- Footer -->
  <footer class="footer py-4 text-light" style="background-color: #333;">
    <div class="container text-center">
      <p>&copy; 2023 Your Blog. All rights reserved.</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#" class="text-light">Terms of Use</a></li>
        <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
        <li class="list-inline-item"><a href="#" class="text-light">Cookie Policy</a></li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
