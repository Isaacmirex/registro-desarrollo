<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Auth\UsuarioController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LaboratorioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/user', [UsuarioController::class, 'index'])
    ->middleware('auth.user')
    ->name('user.index');

// Laboratorios
Route::resource('laboratorios', LaboratorioController::class);

// Eventos
Route::resource('eventos', EventoController::class);

// Agregar rol a usuarios
Route::get('/admin/rol', [LaboratorioController::class, 'showUsers'])
    ->middleware('auth.admin')
    ->name('admin.rol.index');

Route::put('/admin/rol', [LaboratorioController::class, 'updateUsers'])
    ->middleware('auth.admin')
    ->name('admin.rol.update');
