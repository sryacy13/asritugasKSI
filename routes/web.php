<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman dashboard yang hanya bisa diakses oleh pengguna yang sudah login dan terverifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute-rute yang membutuhkan otentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute untuk halaman registrasi
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Memasukkan file auth.php untuk rute login, logout, dll.
require __DIR__.'/auth.php';
