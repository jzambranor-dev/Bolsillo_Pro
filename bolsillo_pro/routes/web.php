<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

// Rutas de la web
Route::get('/', function () {return redirect()->route('login');});
Route::get('/login', function () {return view('login');})->name('login');
Route::get('/register', function () {return view('register');})->name('register');
Route::fallback(function () {return response()->view('errors.404', [], 404);})->name('error.404');


//Peticiones de autenticación
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

// Rutas protegidas

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/module/{module}', [DashboardController::class, 'loadModule'])->name('dashboard.module');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
