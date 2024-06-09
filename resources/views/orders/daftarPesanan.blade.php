<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            background: url("{{asset('images/bg-feedback.png')}}");
            background-size: cover;
            color: #333;
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
                    <a class="nav-link" href="{{url('daftarReview')}}">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('tambahProduk')}}">Product</a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="content-wrapper">
            <h2 class="text-center">Daftar Pesanan</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->nama_pelanggan }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->no_telp }}</td>
                            <td>{{ $order->start_date }}</td>
                            <td>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
