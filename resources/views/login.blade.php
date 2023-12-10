<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Your Blog</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
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
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .login-form input[type="email"],
    .login-form input[type="password"] {
      width: 100%;
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ced4da;
      border-radius: 8px;
      background-color: #f5f5f5;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .login-form input[type="email"]:focus,
    .login-form input[type="password"]:focus {
      outline: none;
      border-color: #f44336;
      box-shadow: 0 0 0 0.25rem rgba(244, 67, 54, 0.25);
    }
    .login-form input[type="submit"] {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 8px;
      background-color: #f44336;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .login-form input[type="submit"]:hover {
      background-color: #dc3545;
    }
    .login-form .btn-social {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: opacity 0.3s;
    }
    .login-form .btn-google {
      background-color: #db4437;
      color: #fff;
    }
    .login-form .btn-facebook {
      background-color: #3b5998;
      color: #fff;
    }
    .login-form .btn-social:hover {
      opacity: 0.8;
    }
    .login-form .btn-social i {
      margin-right: 10px;
    }
    /* Additional styles for the card container */
    .login-card {
      max-width: 400px;
      margin: 100px auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box Shadow */
    }
    .end-10 {
        right: 10px;
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
<script>
    function togglePassword() {
      const passwordField = document.getElementById('passwordField');
      const eyeIcon = document.getElementById('eyeIcon');
  
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      }
    }
  </script>
  
  <div class="container">
    <div class="login-card">
      <h2 class="text-center mb-4">Login to Your Blog</h2>
      <form class="login-form">
        <input type="email" placeholder="Email" required>
        <div class="position-relative">
          <input id="passwordField" type="password" placeholder="Password" class="form-control" required>
          <span  class="position-absolute top-50 end-10 translate-middle-y" onclick="togglePassword()">
            <i id="eyeIcon" class="fa fa-eye" aria-hidden="true"></i>
          </span>
        </div>
        <div class="text-end">
          <a href="#" class="text-primary">Forgot Password?</a>
        </div>
        <input type="submit" value="Login">
        <!-- Text "Or Login" -->
        <p class="text-center my-3">Or Login</p>
        <!-- Social login buttons -->
        <button class="btn btn-google my-3 btn-social">
          <i class="fab fa-google"></i> Sign in with Google
        </button>
        <button class="btn btn-facebook btn-social" type="button">
          <i class="fab fa-facebook-f"></i> Sign in with Facebook
        </button>
      </form>
    </div>
  </div>
    
  <!-- ... (your existing code) ... -->
  
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
