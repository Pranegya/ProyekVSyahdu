<!-- resources/views/gabungan.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="hompage">
        @include('PageUtama/homepage')
    </div>
    <div class="about">
        @include('PageUtama/about')
    </div>
    <div class="booking" >
        @include('PageUtama/booking')
    </div>
    <div class="raview">
        @include('PageUtama/review')
    </div>  
    <div class="contact">
        @include('PageUtama/contact')
    </div>  
</body>
</html>