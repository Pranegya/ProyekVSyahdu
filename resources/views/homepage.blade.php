<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piknik Syahdu Malang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
    body {
      font-family: 'Barlow', sans-serif;
      background-color: #2E332A;
      margin: 0;
      padding: 0;
    }

    .homepage .navbar {
      background-color: #2e4516;
    }

    .homepage .navbar-nav .nav-link {
      color: #66ee3c !important;
    }

    .homepage .hero-section {
      background-image: url("{{ asset('images/image.png') }}");
      background-size: cover;
      background-position: center;
      position: relative;
      height: 1000px;
      color: #fff;
    }

    .homepage .hero-text {
      position: absolute;
      top: 30%;
      left: 40%;
      transform: translate(-50%, -50%);
      text-align: left;
    }

    .homepage .hero-text h1 {
      font-size: 3rem;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      text-align: left;
      font-family: 'Times New Roman', Times, serif;
      font-style: italic;
      font-weight: bold;
    }

    .homepage .cta-button {
      background-color: #4a7436;
      color: #fff;
      padding: 20px 30px;
      border-radius: 5px;
      text-decoration: none;
      margin-left: 140px;
    }

    .homepage .cta-button:hover {
      background-color: #3a5a2a;
      color: #fff;
    }

    .homepage .div.absolute {
      position: absolute;
      top: 80px;
      right: 0;
      width: 200px;
      height: 100px;
      border: 3px solid #ffffff;
      z-index: 100;
    }

    .homepage .btn-secondary {
      margin-right: -1550px;
      float: right;
    }

    .about .container {
      background-color: #2E332A;
      color: #fff;
      padding: 30px;
      border-radius: 0px;
    }

    .about .highlight {
      font-size: 48px
    }

    .about .highlight {
      border-bottom: 2px solid #d4af37;
      display: inline-block;
      margin-bottom: 20px;
    }

    .about .placeholder {
      background-color: #444;
      height: 150px;
      margin-bottom: 20px;
    }

    .booking .hero-section {
      background-image: url("{{ asset('images/bg-feedback.png') }}");
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .booking .booking-form {
      background: rgba(0, 0, 0, 0.7);
      padding: 20px;
      border-radius: 10px;
      color: white;
    }

    .booking .booking-form input,
    .booking-form select {
      margin-bottom: 15px;
    }

    .booking .content {
      color: white;
      text-align: left;
      margin-bottom: 30px;
      font-size: 30px;
    }

    .booking .content h1 {
      margin-bottom: 20px;
    }

    .booking .icons {
      font-size: 24px;
    }

    .booking .icons i {
      margin: 0 10px;
    }

    .booking .highlight {
      border-bottom: 2px solid #d4af37;
      display: inline-block;
      margin-bottom: 20px;
    }

    .review {
      background-color: #fdf2d7;
    }

    .review .review-section {
      padding: 50px 0;
      text-align: center;
    }

    .review .review-section h2 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    .review .review-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 10px;
    }

    .review .review-card p {
      font-size: 14px;
    }

    .review .stars {
      color: gold;
    }

    .review .customer-name {
      margin-top: 10px;
      font-weight: bold;
      color: #333;
    }

    .review .checked {
      color: orange;
    }

    .contact {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    .contact .outer-frame {
      height: 345px;
      background-color: #2E332A;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .contact .frame {
      width: 403px;
      height: 145px;
      margin: 30px;
      display: flex;
    }

    .contact .icon {
      width: 137px;
      height: 145px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #9AD26B;
      background-size: cover;
      background-position: center;
    }

    .contact .icon img {
      max-width: 75%;
      max-height: 75%;
    }

    .contact .word {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
      font-size: 40px;
    }

    .contact .whatsapp {
      background-color: orange;
    }

    .contact .tiktok {
      background-color: orange;
    }

    .contact .instagram {
      background-color: orange;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="homepage">
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
            <a class="nav-link" href="#about1">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#booking1">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('product')}}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#review1">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact1">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Home Section -->
    <section class="hero-section d-flex align-items-center justify-content-center">
      <div>
        <button class="btn" type="submit">
          <a href="{{url('feedback')}}">
            <img src="{{ asset('images/button feedback.png')}}" width="70" alt="buttonpng" />
          </a>
        </button>
      </div>
      <div class="hero-text text-center">
        <h1>Piknik Lebih Seru Dengan Perlengkapan Terbaik Dari PIKNIK SYAHDU Malang.</h1>
      </div>
      <div class="col-12 mb-4 display: flex;">
        <a href="product.html" class="cta-button">Lihat Produk</a>
      </div>
    </section>
  </div>


  <div id="about1" class=about>
    <div class="container mt-5" style="font-weight: bold; ">
      <div class="text-center">
        <h2 class="highlight">Siapa Piknik Syahdu?</h2>
      </div>
      <div class="d-flex">
        <div class="col-md-6 text-center">
          <div><img src="{{asset('images/about.png')}}" width="496" alt="about"></div>
        </div>
        <div class="col-md-6">
          <p style="font-size: 36px;">
            Kami adalah penyedia layanan sewa alat piknik yang memungkinkan Anda untuk menikmati pengalaman piknik yang
            menyenangkan tanpa harus membeli peralatan secara permanen.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h4 style="margin-left: 15px; font-size:40px">Mengapa memilih kami?</h4>
          <ul style="margin-left: 25px; font-size: 40px;">
            <p>1. Kualitas barang terjamin</p>
            <p>2. Harga terjangkau</p>
            <p>3. Kemudahan pemesanan</p>
            <p>4. Pilihan alat yang beragam</p>
            <p>5. Layanan pelanggan yang responsif</p>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="booking1" class="booking">
    <section class="hero-section">
      <div class="container">
        <div class="text-center">
          <h2 class="highlight" style="font-weight: bold; color: white; font-size: 40px;">Pesan Sekarang</h2>
        </div>
        <div class="row justify-content-between align-items-center;">
          <div class="col-md-6 content">
            <h2>Layanan Tersedia!</h2>
            <h2> Peralatan Piknik Siap Pakai</h2>
            <p>Sewa Perlengkapan Piknik Mudah dan Cepat di Piknik Syahdu</p>
          </div>
          <div class="col-md-4 booking-form">
            <form>
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Example@gmail.com">
              </div>
              <div class="form-group">
                <label for="phone">No telp</label>
                <input type="text" class="form-control" id="phone" placeholder="+62">
              </div>
              <div class="form-group">
                <label for="time">Waktu</label>
                <select class="form-control" id="time">
                  <option>1pm - 9pm</option>
                </select>
              </div>
              <button type="submit" class="btn btn-warning btn-block">Buat Jadwal</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div id="review1" class="review">
    <section class="review-section">
      <div class="container">
        <h2>Review</h2>
        <p>Dengarkan Kisah Seru Mereka yang Telah Berpiknik Dengan Kami!</p>
        <div class="row">
          <div class="col-md-4">
            <div class="review-card">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pharetra cursus. Suspendisse eu
                ipsum dui.</p>
              <div class="customer-name">Nama Pelanggan</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="review-card">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pharetra cursus. Suspendisse eu
                ipsum dui.</p>
              <div class="customer-name">Nama Pelanggan</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="review-card">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pharetra cursus. Suspendisse eu
                ipsum dui.</p>
              <div class="customer-name">Nama Pelanggan</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="review-card">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pharetra cursus. Suspendisse eu
                ipsum dui.</p>
              <div class="customer-name">Nama Pelanggan</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="review-card">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales pharetra cursus. Suspendisse eu
                ipsum dui.</p>
              <div class="customer-name">Nama Pelanggan</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </div>

  <div id="contact1" class="contact">
    <div class="outer-frame">
      <div class="frame whatsapp">
        <div class="icon">
          <img src="images/WhatsApp_icon.png" alt="WhatsApp Icon" />
        </div>
        <div class="word">WhatsApp</div>
      </div>
      <div class="frame tiktok">
        <div class="icon">
          <img src="images/Tiktok_icon.png" alt="TikTok Icon" />
        </div>
        <div class="word">Tik Tok</div>
      </div>
      <div class="frame instagram">
        <div class="icon">
          <img src="images/Instagram_icon.png" alt="Instagram Icon" />
        </div>
        <div class="word">Instagram</div>
      </div>
    </div>
    <script src="script.js"></script>
  </div>
</body>

</html>