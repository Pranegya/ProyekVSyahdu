<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <h2 class="text-center">Edit Pesanan</h2>
            <form action="/updatePesanan/{{ $order->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $order->nama_pelanggan }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $order->email }}" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $order->no_telp }}" required>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $order->start_date }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update Pesanan</button>
            </form>
        </div>
    </div>
</body>
</html>
