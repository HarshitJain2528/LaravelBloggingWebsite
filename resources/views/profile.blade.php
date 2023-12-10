<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile - Your Blog</title>
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
    .profile-header {
      background-color: #f8f9fa;
      padding: 60px 0;
      text-align: center;
    }
    .profile-avatar {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }
    .profile-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .profile-bio {
      color: #555;
      margin-bottom: 20px;
    }
    .profile-stats {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
    }
    .profile-stats .stat {
      margin: 0 10px;
    }
    .profile-edit-btn {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .profile-edit-btn:hover {
      background-color: #0056b3;
    }
    .post-list {
      padding: 20px 0;
    }
    .post-card {
      border: none;
      border-radius: 15px;
      transition: transform 0.3s ease-in-out;
      margin-bottom: 20px;
    }
    .post-card:hover {
      transform: translateY(-10px);
    }
    .post-card img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 200px;
      object-fit: cover;
    }
    .post-card .card-body {
      padding: 20px;
    }
    .post-card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    .post-card p {
      font-size: 1rem;
      color: #555;
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
