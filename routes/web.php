<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengunjungController;
use App\Http\Controllers\ProfileController;


// BERANDA
Route::get('/', function () {
    return view('beranda');
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


// SIMPAN DATA PENGUNJUNG
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


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function () {

    // ADMIN HOME
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // ADMIN DASHBOARD
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');

    // ADMIN PROFILE
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');

    // SIMPAN PERUBAHAN PROFILE
    Route::post('/profile', [ProfileController::class, 'save'])
        ->name('profile.save');
            // DATA USER / ADMIN
    Route::resource('admin', AdminController::class);

});