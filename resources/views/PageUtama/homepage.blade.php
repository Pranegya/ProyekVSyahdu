<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piknik Syahdu Malang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #2e4516;
    }

    .navbar-nav .nav-link {
      color: #66ee3c !important;
    }

    .hero-section {
      background-image: url("{{ asset('images/image.png') }}");
      background-size: cover;
      background-position: center;
      position: relative;
      height: 1000px;
      color: #fff;
    }

    .hero-text {
      position: absolute;
      top: 30%;
      left: 40%;
      transform: translate(-50%, -50%);
      text-align: left;
    }

    .hero-text h1 {
      font-size: 3rem;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      text-align: left;
      font-family: 'Times New Roman', Times, serif;
      font-style: italic;
      font-weight: bold;
    }

    .cta-button {
      background-color: #4a7436;
      color: #fff;
      padding: 20px 30px;
      border-radius: 5px;
      text-decoration: none;
      margin-left: 140px;
    }

    .cta-button:hover {
      background-color: #3a5a2a;
      color: #fff;
    }

    .div.absolute {
      position: absolute;
      top: 80px;
      right: 0;
      width: 200px;
      height: 100px;
      border: 3px solid #ffffff;
      z-index: 100;
    }

    .btn-secondary {
      margin-right: -1550px;
      float: right;

    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand"></a>
    <div class="absolute"><img src="{{asset('images/logo3.png')}}" width="100"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="review">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Home Section -->
  <section class="hero-section d-flex align-items-center justify-content-center">
    <div>
      <button class="btn btn-secondary" type="submit">
        <img src="{{ asset('images/button feedback.png')}}" width="70" alt="buttonpng" />
        <a href="feedback.html"></a>
      </button>
    </div>
    <div class="hero-text text-center">
      <h1>Piknik Lebih Seru Dengan Perlengkapan Terbaik Dari PIKNIK SYAHDU Malang.</h1>
    </div>
    <div class="col-12 mb-4 display: flex;">
      <a href="product.html" class="cta-button">Lihat Produk</a>
    </div>
  </section>
</body>

</html>