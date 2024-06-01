<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            background: url("{{asset('images/bg-feedback.png')}}");
            background-size: cover;
            color: #333;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .content-wrapper {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            margin: 50px auto;
        }

        .table thead th {
            background-color: #f1f1f1;
        }

        .table td,
        .table th {
            vertical-align: middle;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.jpg')}}" width="100" alt="Logo">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('tambahProduk')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('daftarPesanan')}}">Daftar Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">LogOut</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="content-wrapper">
            <h2 class="text-center">Feedback/Review</h2>
            <a class="btn btn-success btn-sm"> Hapus Semua</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Rating</th>
                        <th>Author</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Radif</td>
                        <td>Produk bagus</td>
                        <td>Published</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>David</td>
                        <td>Produk biasa</td>
                        <td>Pending</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pranadja</td>
                        <td>Produk jelek</td>
                        <td>hidden</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Brian</td>
                        <td>Puas Dengan layanan</td>
                        <td>Published</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Haidar</td>
                        <td>harga sesuai</td>
                        <td>Published</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>