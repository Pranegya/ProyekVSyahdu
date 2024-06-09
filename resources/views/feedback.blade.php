<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .feedback-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .star-rating .fa-star {
            font-size: 24px;
            color: #ffc107;
        }

        .star-rating .fa-star-o {
            font-size: 24px;
            color: #ccc;
        }

        body {
            background-color: #333;
            color: #000000;
        }

        .text-center {
            color: #ffffff;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand"></a>
        <div>
            <a href="{{url('homepage')}}">
                <img src="{{asset('images/logo.jpg')}}" width="100" alt="">
        </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


    <div class="container">
        <h3 class="text-center">Buat Feedback pada kolom di bawah ini</h3>
        <div class="feedback-container">
            <form>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="rating">Pilih rating</label>
                    <div class="star-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comments">Isikan komen</label>
                    <textarea class="form-control" id="comments" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>
</body>
</html>