<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CalmSpace</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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

      .video-container {
        max-width: 80%;
        margin: 0 auto;
        border: 5px solid #3498db;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .video-description {
        font-size: 1.2rem;
        color: #555;
        font-style: italic;
        max-width: 80%;
        margin: 0 auto;
        padding: 10px;
        margin-bottom: 100px;
        background-color: #f0f8ff;
        border-radius: 8px;
      }

      .card-container {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        margin-top: 35px;
        margin-bottom: 80px;
        padding: 0 160px;
      }

      h2 {
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
      }

      .card .card-title {
        font-family: 'Poppins', sans-serif;
        border-bottom: 2px solid #3498db; 
        padding-bottom: 5px; 
        display: inline-block;
      }

      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        width: 22rem;
      }

      .card:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        outline: 2px solid #3498db;
        transform: translateY(-5px);
      }

      .card-body {
        display: flex;
        flex-direction: column;
      }

      .card .btn {
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-top: auto;
        background-color: #0D92F4;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px 20px;
        border-radius: 30px;
        border: none;
      }

      .card .btn:hover {
        background-color: #0056b3;
        transform: scale(1.05);
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

<!-- Video Content -->
<div class="container my-5">
  <!-- YouTube Video Section -->
  <div class="ratio ratio-16x9 video-container">
    <iframe 
      src="https://www.youtube.com/embed/pcmoQinDhJ4?si=91NyjxlhGF7-Uagd" 
      title="YouTube video" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
  </div>

  <!-- Description Section -->
  <div class="mt-3 text-center">
    <p class="video-description">
      This YouTube video explores the topic of mental well-being. Take a moment to watch and reflect on its insights.
    </p>
  </div>
</div>

      <!-- Article Content -->
    <h2 style="padding-left: 160px;">Mental Health News</h2>
    <div class="card-container">
      <div class="card1 card" style="width: 18rem;">
        <img src="/images/Article1.jpg" class="card-img-top" alt="Kesehatan Mental pada Remaja">
        <div class="card-body">
          <h5 class="card-title">Mengenal Pentingnya Kesehatan Mental pada Remaja</h5>
          <p class="card-text">Kesehatan mental remaja adalah hal penting yang mendukung perkembangan fisik, intelektual, emosional, dan spiritual secara optimal.</p>
          <a href="https://yankes.kemkes.go.id/view_artikel/362/mengenal-pentingnya-kesehatan-mental-pada-remaja" class="btn btn-primary">Read More</a>
        </div>
      </div>

      <div class="card2 card" style="width: 18rem;">
        <img src="/images/Article2.jpg" class="card-img-top" alt="Pentingnya Menjaga Kesehatan Mental">
        <div class="card-body">
          <h5 class="card-title">Apa Pentingnya Menjaga Kesehatan Mental?</h5>
          <p class="card-text">Menjaga kesehatan mental penting untuk mendukung keseimbangan emosi, kemampuan menghadapi stres, dan kualitas hidup secara keseluruhan. Mental yang sehat membantu seseorang berpikir jernih, menjalin hubungan baik, serta meningkatkan produktivitas.</p>
          <a href="https://health.kompas.com/read/2022/06/18/170000368/apa-pentingnya-menjaga-kesehatan-mental-?page=all" class="btn btn-primary">Read More</a>
        </div>
      </div>

      <div class="card3 card" style="width: 18rem;">
        <img src="/images/Article3.jpg" class="card-img-top" alt="Benarkah Generasi Z Memiliki Mental yang Lemah?">
        <div class="card-body">
          <h5 class="card-title">Benarkah Generasi Z Memiliki Mental yang Lemah?</h5>
          <p class="card-text">Data yang dihimpun oleh Jakpat pada 2022 menunjukkan bahwa Generasi Z (lahir 1997-2012) adalah generasi dengan persentase tertinggi yang melaporkan masalah kesehatan mental.</p>
          <a href="https://kumparan.com/elsaajupitaelsaaa/benarkah-generasi-z-memiliki-mental-yang-lemah-23zmWtcgc1M/1" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="card-container">
      <div class="card4 card" style="width: 18rem;">
        <img src="/images/Article4.jpeg" class="card-img-top" alt="Hari Kesehatan Mental Sedunia 2024">
        <div class="card-body">
          <h5 class="card-title">Hari Kesehatan Mental Sedunia 2024</h5>
          <p class="card-text">Hari Kesehatan Mental Sedunia atau World Mental Health Day diperingati setiap tanggal 10 Oktober setiap tahunnya. Tema yang diusung tahun ini adalah ”It is Time to Prioritize Mental Health in the Workplace” atau ”Saatnya Mengutamakan Kesehatan Mental di Tempat Kerja”.</p>
          <a href="https://dinkes.kulonprogokab.go.id/detil/1423/hari-kesehatan-mental-sedunia-2024" class="btn btn-primary">Read More</a>
        </div>
      </div>

      <div class="card5 card" style="width: 18rem;">
        <img src="/images/Article5.jpeg" class="card-img-top" alt="Kebiasaan No.1 di Pagi Hari yang Bermanfaat untuk Kesehatan Fisik dan Mental">
        <div class="card-body">
          <h5 class="card-title">Kebiasaan No.1 di Pagi Hari yang Bermanfaat untuk Kesehatan Fisik dan Mental, Menurut Penelitian!</h5>
          <p class="card-text">Kesehatan fisik dan mental merupakan dua hal penting yang harus sangat dijaga dengan sangat seimbang.</p>
          <a href="https://www.beautynesia.id/wellness/kebiasaan-no1-di-pagi-hari-yang-bermanfaat-untuk-kesehatan-fisik-dan-mental-menurut-penelitian/b-298044/2" class="btn btn-primary">Read More</a>
        </div>
      </div>

      <div class="card6 card" style="width: 18rem;">
        <img src="/images/Article6.jpg" class="card-img-top" alt="Program YMHC">
        <div class="card-body">
          <h5 class="card-title">Kemenpora Nilai Program YMHC untuk Tingkatkan Kesehatan Mental Generasi Muda Indonesia</h5>
          <p class="card-text">Plt. Deputi Pemberdayaan Pemuda Kemenpora Yohan mengatakan bahwa, acara Launching program Youth Mental Health Center (YMHC) untuk meningkatkan perhatian terhadap kesehatan mental generasi muda Indonesia.</p>
          <a href="https://www.kemenpora.go.id/detail/3985/kemenpora-nilai-program-ymhc-untuk-tingkatkan-kesehatan-mental-generasi-muda-indonesia" class="btn btn-primary">Read More</a>
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
