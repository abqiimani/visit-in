<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\DataPengunjungController;
use App\Http\Controllers\RekapKunjunganController;
use App\Http\Controllers\GrafikKunjunganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// ==========================================================
// BERANDA
// ==========================================================

Route::get('/', function () {
    return view('beranda');
})->name('beranda');


// ==========================================================
// TENTANG DESTINASI
// ==========================================================

Route::get('/tentang-destinasi', function () {
    return view('destinasi.index');
})->name('destinasi');


// ==========================================================
// GALERI
// ==========================================================

Route::get('/galeri', function () {
    return view('galeri.index');
})->name('galeri');


// ==========================================================
// ULASAN PENGUNJUNG
// ==========================================================

Route::get('/ulasan-pengunjung', function () {
    return view('ulasan.index');
})->name('ulasan');


// ==========================================================
// FORM DATA PENGUNJUNG
// ==========================================================

Route::get('/pengunjung', [DataPengunjungController::class, 'create'])
    ->name('pengunjung.create');


// ==========================================================
// SIMPAN DATA PENGUNJUNG
// ==========================================================

Route::post('/pengunjung', [DataPengunjungController::class, 'store'])
    ->name('pengunjung.store');


// ==========================================================
// AUTHENTICATION
// ==========================================================

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');


// ==========================================================
// ADMIN
// ==========================================================

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function () {

    // ------------------------------------------------------
    // ADMIN HOME
    // ------------------------------------------------------

    Route::get('/', function () {
        return view('home');
    })->name('home');


    // ------------------------------------------------------
    // ADMIN DASHBOARD
    // ------------------------------------------------------

    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');


    // ------------------------------------------------------
    // ADMIN PROFILE
    // ------------------------------------------------------

    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');

    Route::post('/profile', [ProfileController::class, 'save'])
        ->name('profile.save');


    // ------------------------------------------------------
    // DATA USER / ADMIN
    // ------------------------------------------------------

    Route::resource('admin', AdminController::class);


    // ------------------------------------------------------
    // DATA PENGUNJUNG VISIT-IN
    // ------------------------------------------------------

    Route::get('/pengunjung', [PengunjungController::class, 'index'])
        ->name('pengunjung.index');

    Route::get('/pengunjung/{pengunjung}', [PengunjungController::class, 'show'])
        ->name('pengunjung.show');

    Route::delete('/pengunjung/{pengunjung}', [PengunjungController::class, 'destroy'])
        ->name('pengunjung.destroy');


    // ------------------------------------------------------
    // REKAP KUNJUNGAN VISIT-IN
    // ------------------------------------------------------

    Route::get('/rekap-kunjungan', [RekapKunjunganController::class, 'index'])
        ->name('rekap-kunjungan.index');


    // ------------------------------------------------------
    // GRAFIK KUNJUNGAN VISIT-IN
    // ------------------------------------------------------

    Route::get('/grafik-kunjungan', [GrafikKunjunganController::class, 'index'])
        ->name('grafik-kunjungan.index');

});