<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

/* Rutas antiguas - Ancient routes */

Route::get('/home', [Controller::class, 'index'])->name('home');
Route::get('/welcome', [Controller::class, 'welcome'])->name('welcome');
/* Route::get('/login', [App\Http\Controllers\Controller::class, 'index_login'])->name('login'); */ /* Antiguo login no funcional, solo vista - Old login not functional, view only */

/* Rutas nuevas - New Ruts */
/* Rutas para el login - Routes to log in */
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* Ruta para el inicio del formulario */
Route::get('/', [Controller::class, 'form'])->name('form.index');
/* Ruta para poder buscar en el book */
Route::post('/buscar', [Controller::class, 'search'])->name('form.search');
/* Ruta para inicio de la solicitud */
Route::get('/solicitud', [Controller::class, 'showSolicitude'])->name('form.solicitude');
Route::post('/registro-busqueda', [Controller::class, 'searchSolicitude'])->name('register.search');
Route::post('/store', [Controller::class, 'store'])->name('applications.store');

/* Rutas para el administrador */
Route::middleware(['auth'])->group(function () {
  Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});
