<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SesiController::class, 'index'])->name('login'); // Route untuk halaman login
Route::post('/', [SesiController::class, 'login']); // Route untuk proses login

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin'); // Route untuk halaman admin
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout'); // Route untuk logout
});

Route::redirect('/home', '/admin'); // Redirect /home ke /admin
