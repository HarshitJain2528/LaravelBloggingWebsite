@extends('User.layouts.main')

@section('user-contact-section')
@include('User.layouts.navbar')
  <section class="contact-section">
    <div class="container">
      <h1 class="contact-title">Contact Us</h1>
      <p class="contact-info">
        Have any questions or suggestions? Feel free to get in touch with us. Your feedback is valuable to us!<br>
        <strong>Email:</strong> info@yourblog.com<br>
        <strong>Phone:</strong> +1 123 456 7890<br>
        <strong>Address:</strong> 123 Blogging Street, City, Country
      </p>
      <div class="contact-form">
        <h2>Send Us a Message</h2>
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </section>
@endsection
