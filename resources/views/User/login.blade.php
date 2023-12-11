@extends('User.layouts.main')

@section('user-login-section')
@include('User.layouts.navbar')
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