<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\SzereloController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Menük
Route::get('/adatbazis', [DatabaseController::class, 'index'])->name('adatbazis');
Route::get('/kapcsolat', [ContactController::class, 'showForm'])->name('kapcsolat');
Route::post('/kapcsolat', [ContactController::class, 'submitForm'])->name('kapcsolat.submit');

Route::middleware('auth')->group(function () {
    Route::get('/uzenetek', [MessageController::class, 'index'])->name('uzenetek');

    Route::get('/diagram', [DiagramController::class, 'index'])->name('diagram');

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::resource('szerelos', SzereloController::class);
    });
});
