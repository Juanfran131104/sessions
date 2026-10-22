<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Ruta principal (Home). Esta línea es la que quita la pantalla predeterminada de Laravel.
Route::view('/', 'home')->name('home');

// Rutas de Autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');