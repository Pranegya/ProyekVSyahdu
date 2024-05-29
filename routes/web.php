<?php

use App\Http\Controllers\PageUtamaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('PageUtama.about');
});

Route::get('/booking', function () {
    return view('PageUtama.booking'); 
});

Route::get('/review', function () {
    return view('PageUtama.review'); 
});

Route::get('/contact', function () {
    return view('PageUtama.contact'); 
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/feedback', function () {
    return view('feedback');
});;

Route::get('/login', function () {
    return view('login');
});

Route::get('/tambahProduk', function () {
    return view('tambahProduk');
});

Route::get('/daftarPesanan', function () {
    return view('daftarPesanan');
});

Route::get('/index', [PageUtamaController::class, 'index']);

