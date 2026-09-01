<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengunjungController;




// BERANDA
Route::get('/', function () {
    return view('home');
})->name('beranda');


// TENTANG DESTINASI
Route::get('/tentang-destinasi', function () {
    return view('destinasi.index');
})->name('destinasi');


// GALERI
Route::get('/galeri', function () {
    return view('galeri.index');
})->name('galeri');


// ULASAN PENGUNJUNG
Route::get('/ulasan-pengunjung', function () {
    return view('ulasan.index');
})->name('ulasan');


// FORM DATA PENGUNJUNG
Route::get('/pengunjung', [DataPengunjungController::class, 'create'])
    ->name('pengunjung.create');


// SIMPAN DATA
Route::post('/pengunjung', [DataPengunjungController::class, 'store'])
    ->name('pengunjung.store');


// KONFIRMASI
Route::get('/konfirmasi', [DataPengunjungController::class, 'konfirmasi'])
    ->name('pengunjung.konfirmasi');



/*
|--------------------------------------------------------------------------
| AUTHENTICATION / ADMIN
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');