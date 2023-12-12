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
            <a class="nav-link" href="{{url('user/settings')}}"><i class="fas fa-cog"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a href="{{url('user/addPost')}}" class="nav-link add-post-btn" aria-label="Add Post">
              <i class="fas fa-plus"></i>
            </a>
          </li>
          @auth <!-- Check if the user is authenticated -->
          <li class="nav-item">
            <form action="{{url('user-logout')}}" method="POST">
              @csrf
              <button type="submit" class="nav-link btn btn-link">Logout</button>
            </form>
          </li>
          <li class="nav-item profile-item">
            <a class="nav-link profile-link" href="{{url('profile-show/'.Auth::user()->id)}}">
                <i class="fas fa-user-circle fa-lg"></i>
                <span class="profile-name">{{ Auth::user()->name }}</span>
            </a>
          </li>
        
            @else <!-- If user is not authenticated -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('user/login-form') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('user/signup-form') }}">Sign Up</a>
                </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>

  <script>
    $(document).ready(function() {
        $('.profile-item').hover(
            function() {
                // Show the user's name when hovering
                $('.profile-name').fadeIn(300);
            },
            function() {
                // Hide the user's name when not hovering
                $('.profile-name').fadeOut(300);
            }
        );
    });
  </script>