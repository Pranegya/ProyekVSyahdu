<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
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
                    <a class="nav-link" href="{{url('daftarReview')}}">Daftar Review</a>
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
            <h2 class="text-center">Daftar Produk</h2>
            <a class="btn btn-success btn-sm"> + Tambah produk</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah Barang</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tenda</td>
                        <td>20</td>
                        <td>Rp. 50.0000,00</td>
                        <td>Tenda</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Kompor Gas Portabel</td>
                        <td>20</td>
                        <td>Rp. 20.0000,00</td>
                        <td>Kompor</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Kursi Lipat</td>
                        <td>40</td>
                        <td>Rp. 20.000,00</td>
                        <td>Kursi</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ransel</td>
                        <td>40</td>
                        <td>Rp.30.000,00</td>
                        <td>Ransel</td>
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