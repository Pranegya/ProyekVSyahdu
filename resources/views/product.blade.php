<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #2a2a2a;
            color: #4baf26;
        }

        .navbar {
            background-color: #fff;
            padding: 0 20px;
        }

        .navbar ul {
            width: 100%;
            list-style: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .homepage .navbar li {
            margin-left: 20px;
        }

        .navbar a {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: #8BBD62 !important;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 20px;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #fff;
            color: #66ee3c !important;
        }

        .product-card {
            background-color: #f9f5e8;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
        }

        .btn-success {
            background-color: #4baf26;
            border: none;
        }

        .btn-secondary {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 5px 9px;
            text-align: left;
            text-decoration: none;
            font-size: 16px;
            margin-left: 10px;
        }

        .search-bar {
            float: right;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand"></a>
        <div>
            <a href="{{url('homepage')}}">
            <img src="{{asset('images/logo.jpg')}}" width="100" alt=""></div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('homepage#about1')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('homepage#booking1')}}">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('product')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('homepage#review1')}}">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('homepage#contact1')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Products Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mb-4 display: inline-flex;">
                <p>
                    Kategori<button class="btn btn-secondary pull-right">Semua</button>
                </p>
                <input class="search-bar" type="text" placeholder="Search..">
            </div>
            <div class="col-md-4">
                <div class="product-card text-center">
                    <img src="{{asset('images/kompor.png')}}" alt="Kompor Portabel">
                    <h5>Kompor Portabel</h5>
                    <p>Rp.xxxx,00</p>
                    <button class="btn btn-success">Tersedia</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card text-center">
                    <img src="{{asset('images/kompor.png')}}" alt="Kompor Portabel">
                    <h5>Kompor Portabel</h5>
                    <p>Rp.xxxx,00</p>
                    <button class="btn btn-success">Tersedia</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card text-center">
                    <img src="{{asset('images/kompor.png')}}" alt="Kompor Portabel">
                    <h5>Kompor Portabel</h5>
                    <p>Rp.xxxx,00</p>
                    <button class="btn btn-success">Tersedia</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card text-center">
                    <img src="{{asset('images/kompor.png')}}" alt="Kompor Portabel">
                    <h5>Kompor Portabel</h5>
                    <p>Rp.xxxx,00</p>
                    <button class="btn btn-success">Tersedia</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card text-center">
                    <img src="{{asset('images/kompor.png')}}" alt="Kompor Portabel">
                    <h5>Kompor Portabel</h5>
                    <p>Rp.xxxx,00</p>
                    <button class="btn btn-success">Tersedia</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card text-center">
                    <img src="{{asset('images/kompor.png')}}" alt="Kompor Portabel">
                    <h5>Kompor Portabel</h5>
                    <p>Rp.xxxx,00</p>
                    <button class="btn btn-success">Tersedia</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
