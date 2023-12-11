@extends('User.layouts.main')

@section('user-signup-section')
@include('User.layouts.navbar')

  
  <div class="container">
    <div class="login-card">
      <h2 class="text-center mb-4">SignUp to Your Blog</h2>
      <form class="login-form" method="post" action="{{ url('register-user') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <div class="position-relative">
          <input id="passwordField" name="password" type="password" placeholder="Password" class="form-control" required>
          <span  class="position-absolute top-50 end-10 translate-middle-y" onclick="togglePassword()">
            <i id="eyeIcon" class="fa fa-eye" aria-hidden="true"></i>
          </span>
        </div>
        <input type="submit" value="Sign Up">
        <!-- Text "Or Login" -->
        <p class="text-center my-3">Or Signup With</p>
        <!-- Social login buttons -->
        <button class="btn btn-google my-3 btn-social">
          <i class="fab fa-google"></i> Sign up with Google
        </button>
        <button class="btn btn-facebook btn-social" type="button">
          <i class="fab fa-facebook-f"></i> Sign up with Facebook
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