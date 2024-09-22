<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;

/* Rutas antiguas - Ancient routes */

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [Controller::class, 'index'])->name('home');
Route::get('/welcome', [Controller::class, 'welcome'])->name('welcome');
/* Route::get('/login', [App\Http\Controllers\Controller::class, 'index_login'])->name('login'); */ /* Antiguo login no funcional, solo vista - Old login not functional, view only */

/* Rutas nuevas - New Ruts */
/* Rutas para el login - Routes to log in */
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
