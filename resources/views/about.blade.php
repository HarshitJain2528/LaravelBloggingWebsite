<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Your Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    .about-section {
      padding: 100px 0;
      text-align: center;
    }
    .about-title {
      font-size: 3.5rem;
      font-weight: bold;
      margin-bottom: 30px;
      color: #333;
    }
    .about-content {
      color: #555;
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 50px;
    }
    .team-section {
      display: flex;
      justify-content: center;
      gap: 40px;
    }
    .team-member {
      text-align: center;
    }
    .team-member img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 20px;
      border: 4px solid #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .team-member h3 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #333;
    }
    .team-member p {
      color: #777;
      font-size: 1rem;
    }
  </style>
</head>
<body>

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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
