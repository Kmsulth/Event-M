<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAcaraController;


Route::get('/', [SesiController::class, 'index'])->name('login'); // Route untuk halaman login
Route::post('/', [SesiController::class, 'login']); // Route untuk proses login

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin'); // Route untuk halaman admin
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout'); // Route untuk logout
});

Route::redirect('/home', '/admin'); // Redirect /home ke /admin

// Route untuk halaman registrasi acara
Route::get('/registrasi', [RegistrasiAcaraController::class, 'index'])->name('registrasi');
Route::post('/simpanacara', [RegistrasiAcaraController::class, 'insert'])->name('simpanacara');
Route::get('/dataregis', [RegistrasiAcaraController::class, 'dataregis'])->name('dataregis');



