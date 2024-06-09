<?php

use App\Http\Controllers\PageUtamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TambahProdukController;
use App\Http\Controllers\DaftarPesananController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DaftarReviewController;

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
    return view('orders/daftarPesanan');
});

Route::get('/daftarReview', function () {
    return view('daftarReview');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/tambahProduk', [TambahProdukController::class, 'index'])->middleware('auth')->name('tambahProduk');
Route::get('/daftarPesanan', [DaftarPesananController::class, 'index'])->middleware('auth')->name('daftarPesanan');
Route::get('/daftarReview', [DaftarReviewController::class, 'index'])->middleware('auth')->name('daftarReview');
// Route::get('/product', 'ProductController@index')->name('product');
// Route::get('/homepage','HomepageController@index')->name('homepage');

// Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::get('/orders/{id}/edit', [DaftarPesananController::class, 'edit'])->name('orders.edit');
Route::delete('/orders/{id}', [DaftarPesananController::class, 'destroy'])->name('orders.destroy');
// Route::get('/orders', [DaftarPesananController::class, 'index'])->name('orders.index');
Route::put('/orders/{id}', [DaftarPesananController::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [DaftarPesananController::class, 'destroy'])->name('orders.destroy');
// Route::get('/orders/create', [DaftarPesananController::class, 'create'])->name('orders.create');
// Route::post('/orders', [DaftarPesananController::class, 'store'])->name('orders.store');

Route::get('/orders/create', [DaftarPesananController::class, 'add'])->name('orders.create');
Route::post('/orders', [DaftarPesananController::class, 'addsave'])->name('orders.store');
Route::get('/orders', [DaftarPesananController::class, 'index'])->name('orders.index');

Route::get('/daftarPesanan', [DaftarPesananController::class, 'index'])->middleware('auth');
Route::post('/tambahPesanan', [DaftarPesananController::class, 'store'])->middleware('auth');
Route::get('/editPesanan/{id}', [DaftarPesananController::class, 'edit'])->middleware('auth');
Route::put('/updatePesanan/{id}', [DaftarPesananController::class, 'update'])->middleware('auth');
Route::delete('/hapusPesanan/{id}', [DaftarPesananController::class, 'destroy'])->middleware('auth');

