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

Route::get('/daftarReview', function () {
    return view('daftarReview');
});

// Route::get('/product', 'ProductController@index')->name('product');
// Route::get('/homepage','HomepageController@index')->name('homepage');