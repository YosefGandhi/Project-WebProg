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

      /* Navbar Styling */
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

      /* Top Card Section */
      .top-card-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: #f0f8ff;
      }

      .top-card-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px; /* Add this line to round the corners of the image */
      }

      .top-card-text {
        position: absolute;
        top: 65%;
        left: 35%;
        transform: translate(-50%, -50%);
        text-align: justify;
      }

      .top-card-text h1 {
        font-size: 2.3rem;
        color: white;
        font-weight: bold;
      }

      .top-card-text p {
        font-size: 1rem;
        color: white;
        max-width: 65%;
      }

      .custom-button {
        background-color: white; 
        color: #0D92F4; 
        border: 2px solid #0D92F4;
        border-radius: 10px; 
        transition: all 0.3s ease-in-out; 
        font-weight: bold; 
      }

      .custom-button:hover {
        background-color: #0D92F4; 
        color: white;
        transform: scale(1.1); 
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); 
      }




      /* Styling for Three Cards Section */
      .card-container {
        margin: 40px 0;
      }

      .service-icon {
        width: 64px;
        height: 64px;
        object-fit: cover; 
      }

      .card-container .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, outline 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }
      .card-container .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        outline: 3px solid #007bff; /* Outline warna biru saat hover */
      }
      .card-container .card-title {
        font-size: 1.8rem;
        font-weight: bold;
        color: #333;
      }
      .card-container .card-text {
        font-size: 1rem;
        color: #666;
      }

      /* Footer Styling */
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- Top Card Section -->
    <div class="top-card-section">
      <img src="/images/f5.png" alt="Background Image">
      <div class="top-card-text">
        <h1>Welcome to CalmSpace</h1>
        <p>Take a moment to relax, breathe, and enjoy insightful articles tailored for your mental well-being.</p>
        <a href="#" class="btn custom-button btn-lg mt-3 px-4 py-2">
          Ceritakan Masalahmu
        </a>
      </div>
    </div>



    <!-- Our Service Section -->
    <div class="text-center mt-5">
      <h2 class="fw-bold">Our Services</h2>
    </div>
    <div class="d-flex justify-content-center flex-wrap mt-4 card-container">
      <!-- Service 1: Garbage Pickup -->
      <div class="card mx-3 p-3" style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
          <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">GG</h5>
          <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur. Aliquet amet elementum.</p>
          <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Service 2: Dumpster Rental -->
      <div class="card mx-3 p-3" style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
          <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">GG</h5>
          <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur. Aliquet amet elementum.</p>
          <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Service 3: Waste Collection -->
      <div class="card mx-3 p-3" style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
          <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">GG</h5>
          <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur. Aliquet amet elementum.</p>
          <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
            <i class="bi bi-arrow-right"></i>
          </a>
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
