<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StafController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.tampil');
});

Route::get('/home', [HomeController::class, 'tampil'])->name('home.tampil');
Route::get('/dashboard', [DashboardController::class, 'tampil'])->name('dashboard.tampil');

Route::middleware('guest')->group(function () {
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});


Route::get('/staf', [StafController::class, 'tampil'])->name('staf.tampil');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/staf/tambah', [StafController::class, 'tambah'])->name('staf.tambah');
    Route::post('/staf/submit', [StafController::class, 'submit'])->name('staf.submit');
    Route::get('/staf/edit/{id}', [StafController::class, 'edit'])->name('staf.edit');
    Route::post('/staf/update/{id}', [StafController::class, 'update'])->name('staf.update');
    Route::post('/staf/delete/{id}', [StafController::class, 'delete'])->name('staf.delete');

});



