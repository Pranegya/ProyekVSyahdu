<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piknik Syahdu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
</html>
