<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admision\setupUnoController;
use App\Http\Controllers\admision\setupDosController;
use App\Http\Controllers\admision\buscarCedulaController;
use App\Http\Controllers\admision\admisionController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\fichasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [homeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Buscar Cédula
Route::get('/buscar/cedula', [buscarCedulaController::class, 'buscarCedula'])->name('buscar.cedula');

// Representantes
Route::get('/admision/representante', [setupUnoController::class, 'create'])->name('admision.representante.create');
Route::post('/admision/representante', [setupUnoController::class, 'store'])->name('admision.representante.store');
Route::get('/admision/representante/actualizar/{id}', [setupUnoController::class, 'edit'])->name('admision.representante.edit');
Route::post('/admision/representante/actualizar/{id}', [setupUnoController::class, 'update'])->name('admision.representante.update');

//Estudiantes
Route::get('/admision/estudiante/{id}/{email}/{numeroInscripion}', [setupDosController::class, 'create'])->name('admision.estudiante.create');
Route::post('/admision/estudiante/{id}/{email}', [setupDosController::class, 'store'])->name('admision.estudiante.store');

//Muestra la ficha de aspirantes cuando el usuario ya está logeado.
Route::get('/dashboard/ficha-aspirantes/{id}', [admisionController::class, 'create'])->name('ficha.aspirante.create');


//Link de matriculacion, admision y aspirantes.
Route::get('/ficha/aspirante/create', [fichasController::class, 'createAspirante'])->name('ficha.aspirante.create');
Route::post('/ficha/aspirante/store', [fichasController::class, 'storeAspirante'])->name('ficha.aspirante.store');

require __DIR__.'/auth.php';
