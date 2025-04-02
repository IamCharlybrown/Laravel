<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperHeroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas web de tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider y están
| dentro del grupo de middleware "web".
|
*/

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Dashboard protegido con autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Recursos protegidos por autenticación
    Route::resource('gender', GenderController::class);
    Route::resource('genders', GenderController::class);
    Route::resource('superheroes', SuperHeroController::class);
    Route::resource('universes', UniverseController::class);
});

// Cargar rutas de autenticación de Breeze
require __DIR__.'/auth.php';
