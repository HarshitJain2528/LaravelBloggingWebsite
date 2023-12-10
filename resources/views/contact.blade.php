<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Your Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    .contact-section {
      padding: 100px 0;
      text-align: center;
    }
    .contact-title {
      font-size: 3.5rem;
      font-weight: bold;
      margin-bottom: 30px;
      color: #333;
    }
    .contact-info {
      color: #555;
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 50px;
    }
    .contact-form {
      max-width: 500px;
      margin: 0 auto;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }
    .form-control {
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #f44336;
    }
    .form-control::placeholder {
      color: #ccc;
    }
    .btn-primary {
      background-color: #f44336;
      border: none;
      border-radius: 5px;
      padding: 12px 25px;
      font-size: 1.2rem;
    }
    .btn-primary:hover {
      background-color: #dc3545;
    }
  </style>
</head>
<body>

  <!-- Contact Section -->
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
