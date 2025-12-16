<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Halaman Rentan
Route::get('/vuln', [LoginController::class, 'showVulnForm']);
Route::post('/login/vuln', [LoginController::class, 'loginVuln']);

// Rute untuk Halaman Aman
Route::get('/secure', [LoginController::class, 'showSecureForm']);
Route::post('/login/secure', [LoginController::class, 'loginSecure']);