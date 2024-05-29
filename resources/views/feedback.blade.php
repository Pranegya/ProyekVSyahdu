<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar {
            background-color: #2e4516;
        }
        .navbar-nav .nav-link {
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
        .text-center{
            color: #ffffff;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" ></a>
        <div class="absolute"><img src="{{asset('images/logo3.png')}}" width="100"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="booking.html">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.html">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.html">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container">
        <h3 class="text-center">Buat Feedback pada kolom di bawah ini</h3>
        <div class="feedback-container">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="rating">Share your experience in scaling</label>
                    <div class="star-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comments">Add your comments</label>
                    <textarea class="form-control" id="comments" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>
</body>
</html>
