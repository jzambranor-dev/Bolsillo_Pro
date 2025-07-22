<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

// Rutas de la web
Route::get('/', function () {return redirect()->route('login');});
Route::get('/login', function () {return view('login');})->name('login');
Route::get('/register', function () {return view('register');})->name('register');
Route::fallback(function () {return response()->view('errors.404', [], 404);})->name('error.404');

