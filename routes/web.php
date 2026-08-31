<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengunjungController;

Route::get('/', [DataPengunjungController::class, 'create'])
    ->name('pengunjung.create');

Route::post('/pengunjung', [DataPengunjungController::class, 'store'])
    ->name('pengunjung.store');

Route::get('/konfirmasi', [DataPengunjungController::class, 'konfirmasi'])
    ->name('pengunjung.konfirmasi');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');