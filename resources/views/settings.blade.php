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



    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: .4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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

  
<section class="container my-5">
    <h2 class="text-center mb-4">Settings</h2>
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card p-4 shadow-sm">
          <h3>Dark Mode</h3>
          <hr>
          <label class="switch mb-3">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider round"></span>
          </label>
          <h3>Email Notifications</h3>
        <hr>
        <label for="emailToggle" class="form-check-label mb-3">
          <input type="checkbox" id="emailToggle">
          Receive Email Notifications
        </label>

        <h3>Privacy</h3>
        <hr>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="privacyOptions" id="public" checked>
          <label class="form-check-label" for="public">
            Public Profile
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="privacyOptions" id="private">
          <label class="form-check-label" for="private">
            Private Profile
          </label>
        </div>
          <button class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </section>

  <script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const darkModeLabel = document.getElementById('darkModeLabel');
    const emailToggle = document.getElementById('emailToggle');
    
    darkModeToggle.addEventListener('change', () => {
      if (darkModeToggle.checked) {
        darkModeLabel.innerText = 'Dark Mode';
      } else {
        darkModeLabel.innerText = 'Light Mode';
      }
    });
    
    emailToggle.addEventListener('change', () => {
      // Handle email notification toggle
    });
    </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
