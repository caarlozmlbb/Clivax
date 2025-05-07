<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuarioController;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Breeze (login, register, etc.)
require __DIR__.'/auth.php';

// Dashboard protegido
Route::get('/dashboard', [HomeController::class, 'root'])->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas con autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/lista-usuarios',[UsuarioController::class, 'lista_usuarios'])->name('lista_usuarios');
Route::post('/crear_usuario', [UsuarioController::class, 'crear_usuario'])->name('crear_usuario');
Route::post('/usuario-rol/{id}', [UsuarioController::class, 'asignar_rol'])->name('asignar_rol');

Route::resource('/roles', RolesController::class)->names('roles');

// Esta ruta debe ir **al final** para no interferir con las rutas de Breeze
Route::get('{any}', [HomeController::class, 'index'])->where('any', '.*')->name('index');
