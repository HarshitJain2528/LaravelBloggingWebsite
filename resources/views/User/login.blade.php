@extends('User.layouts.main')

@section('user-login-section')
@include('User.layouts.navbar')
  <div class="container">
    <div class="login-card settingsCard" >
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <h2 class="text-center mb-4">Login to Your Blog</h2>
      <form class="login-form" method="post" action="{{url('login')}}">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <div class="position-relative">
          <input id="passwordField" type="password" name="password" placeholder="Password" class="form-control" required>
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
        <a href="{{url('auth/google')}}" class="btn btn-google my-3 btn-social">
          <i class="fab fa-google"></i> Sign in with Google
        </a>
        <button class="btn btn-facebook btn-social" type="button">
          <i class="fab fa-facebook-f"></i> Sign in with Facebook
        </button>
      </form>
    </div>
  </div>
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
  @endsection