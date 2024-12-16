<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CalmSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(to bottom, #f0f8ff, #ffffff);
      }
      .navbar-brand {
        margin-left: 25px;
        color: #0D92F4;
        font-size: 1.8rem;
        font-weight: bold;
      }
      .navbar-brand:hover {
        color: #0056b3;
      }

      .navbar-nav .nav-link {
        color: black;
        font-size: 1.2rem;
        transition: background-color 0.3s ease, color 0.3s ease;
        padding: 10px 20px;
      }

      .navbar-nav .nav-link:hover {
        color: white;
        background-color: #0D92F4;
        border-radius: 5px;
      }

      .navbar-nav .nav-item {
        margin-left: 50px;
      }

      .navbar-nav {
        margin-right: 50px;
      }

      .container-content {
        max-width: 700px;
        margin: 40px auto;
        background-color: #ffffff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .container-content h2 {
        animation: fadeInUp 1s ease-in-out;
      }

      .timeline {
        list-style: none;
        padding: 0;
        position: relative;
      }

      .timeline li {
        padding: 20px 0;
        position: relative;
      }

      .timeline li h4 {
        font-size: 1.5rem;
        color: #0D92F4;
      }

      .timeline li p {
        margin-top: 5px;
        color: #333;
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      footer {
        background-color: #0D92F4;
        color: white;
        padding: 20px;
      }

      footer .social-icons a {
        color: white;
        font-size: 1.5rem;
        margin: 0 10px;
        transition: color 0.3s ease;
      }

      footer .social-icons a:hover {
        color: #0056b3;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CalmSpace</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('article') }}">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Content -->
    <div class="container my-5 container-content">
      <h1 class="text-center mb-3">About Us</h1>
      <p class="text-center">
        At CalmSpace, we believe that mental well-being is the cornerstone of a fulfilling and balanced life. 
        Our platform is designed to provide a safe and serene space where individuals can explore resources, 
        articles, and tools tailored to promote relaxation, mindfulness, and self-growth.
      </p>

      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title text-center"><i class="bi bi-bullseye text-primary"></i> Our Mission</h2>
          <p class="card-text text-center">
            Our mission is to empower individuals to prioritize their mental health through accessible, high-quality content. 
            We aim to foster a supportive community where people can take small yet impactful steps toward a healthier mind 
            and happier life. CalmSpace is committed to delivering practical insights and encouragement for anyone seeking 
            balance in the chaos of modern living.
          </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-center"><i class="bi bi-journal-text text-primary"></i> Our Story</h2>
          <ul class="timeline">
            <li>
              <h4>2024</h4>
              <p>CalmSpace was founded with the vision of creating a digital sanctuary for mental well-being.</p>
            </li>
            <li>
              <h4>Today</h4>
              <p>CalmSpace continues to inspire individuals worldwide to take a pause and prioritize self-growth.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
      <p>&copy; 2024 CalmSpace. All rights reserved.</p>
      <div class="social-icons">
        <a href="#"><i class="bi bi-tiktok"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
