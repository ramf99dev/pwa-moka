<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioAdminController;
use App\Http\Controllers\ZonaController;
use Illuminate\Support\Facades\Route;

// Rutas públicas (accesibles para todos)
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Autenticación (login, registro, etc.)
//Auth::routes(); 

// Grupo de rutas para administrador
Route::middleware(['auth'])->group(function () {
    // Rutas de administrador
    Route::resource('categoria', CategoriaController::class)->parameters([
        'categoria' => 'categoria' 
    ]);
    Route::resource('producto', ProductoController::class);
    Route::resource('usuario', UsuarioAdminController::class);
    Route::resource('zona', ZonaController::class);
    Route::get('/producto', [ProductoController::class, 'index'])->name('producto.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para Empleado (permiso 1) y Cliente (permiso 2)
Route::middleware(['auth'])->group(function () {
    // Rutas comunes (ej: perfil, pedidos)
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
});

require __DIR__ . '/auth.php';