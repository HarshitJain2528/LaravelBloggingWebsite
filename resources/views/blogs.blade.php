<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs - Your Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
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
    .blog-container {
      max-width: 900px;
      margin: 50px auto;
      padding: 0 15px;
    }
    .blog-card {
      margin-bottom: 30px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .blog-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .blog-excerpt {
      color: #666;
      margin-bottom: 20px;
    }
    .blog-image {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }
    .read-more-btn {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .read-more-btn:hover {
      background-color: #0056b3;
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
        </ul>
      </div>
    </div>
  </nav>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
