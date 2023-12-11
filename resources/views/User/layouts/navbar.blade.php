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
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/blogs')}}">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/login-form')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/signup-form')}}">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="{{url('user/addPost')}}" class="nav-link add-post-btn" aria-label="Add Post">
              <i class="fas fa-plus"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('user/settings')}}"><i class="fas fa-cog"></i> Settings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>