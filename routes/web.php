<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

/* Rutas antiguas - Ancient routes */

Route::get('/home', [Controller::class, 'index'])->name('home');
Route::get('/welcome', [Controller::class, 'welcome'])->name('welcome');

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
  Route::get('/admin', [AdminController::class, 'admin'])->name('admin'); /* Antigua ruta del modo administrador - se puede eliminar si es necesario */
  Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    /* Rutas de prueba para el modo administrador */
    // Rutas para las solicitudes de partidas
    Route::get('/applications', [AdminController::class, 'indexApplications'])->name('applications.index');
    Route::get('/applications/create', [AdminController::class, 'createApplications'])->name('applications.create');
    Route::post('/applications', [AdminController::class, 'storeApplications'])->name('applications.store');
    Route::get('/applications/{id}/edit', [AdminController::class, 'editApplications'])->name('applications.edit');
    Route::put('/applications/{id}', [AdminController::class, 'updateApplications'])->name('applications.update');
    Route::delete('/applications/{id}', [AdminController::class, 'destroyApplications'])->name('applications.destroy');

    // Rutas para las personas en las partidas
    Route::get('/book', [AdminController::class, 'indexbook'])->name('book.index');
    Route::get('/book/create', [AdminController::class, 'createBook'])->name('book.create');
    Route::post('/book', [AdminController::class, 'storeBook'])->name('book.store');
    Route::get('/book/{id}/edit', [AdminController::class, 'editBook'])->name('book.edit');
    Route::put('/book/{id}', [AdminController::class, 'updateBook'])->name('book.update');
    Route::delete('/book/{id}', [AdminController::class, 'destroyBook'])->name('book.destroy');

    // Rutas para los usuarios - funcional
    Route::get('/users', [AdminController::class, 'indexUsers'])->name('users.index');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'destroyUser'])->name('users.destroy');
});
