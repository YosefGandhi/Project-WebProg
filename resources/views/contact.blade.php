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

    <div class="container my-5">
      <h1 class="text-center mb-4">Contact Us</h1>
      <p class="lead text-center">Have any questions or feedback? Feel free to reach out to us using the form below.</p>
      <form class="my-4">
         <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Your Email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        
        <section class="mt-5">
        <div class="row">
            <!-- Email Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="bi bi-envelope-fill"></i> Email</h5>
                        <p class="card-text">support@sneakersandco.com</p>
                    </div>
                </div>
            </div>

            <!-- Phone Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="bi bi-telephone-fill"></i> Phone</h5>
                        <p class="card-text">+1 234 567 890</p>
                    </div>
                </div>
            </div>

            <!-- Address Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="bi bi-geo-alt-fill"></i> Address</h5>
                        <p class="card-text">123 Sneakers Street, New York, NY</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
