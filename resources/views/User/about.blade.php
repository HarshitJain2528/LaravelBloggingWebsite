@extends('User.layouts.main')

@section('user-about-section')
  @include('User.layouts.navbar')  
<!-- About Section -->
  <section class="about-section">
    <div class="container">
      <h1 class="about-title">About Us</h1>
      <p class="about-content">
        Welcome to Your Blog! We are a passionate team dedicated to sharing valuable insights and knowledge through our blogs. Our mission is to create engaging and informative content that enriches and inspires our readers.
      </p>
      <div class="team-section">
        <div class="team-member">
          <img src="https://via.placeholder.com/150" alt="Team Member 1">
          <h3>John Doe</h3>
          <p>Founder & CEO</p>
        </div>
        <div class="team-member">
          <img src="https://via.placeholder.com/150" alt="Team Member 2">
          <h3>Jane Smith</h3>
          <p>Content Writer</p>
        </div>
        <div class="team-member">
          <img src="https://via.placeholder.com/150" alt="Team Member 3">
          <h3>David Johnson</h3>
          <p>Marketing Specialist</p>
        </div>
      </div>
    </div>
  </section>
@endsection