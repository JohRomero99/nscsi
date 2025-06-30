<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admision\setupUnoController;
use App\Http\Controllers\admision\setupDosController;
use App\Http\Controllers\admision\buscarCedulaController;
use App\Http\Controllers\admision\admisionController;
use App\Http\Controllers\admision\agregarEstudianteController;
use App\Http\Controllers\admision\datosPadresController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\fichasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admision/representante', [setupUnoController::class, 'create'])->name('admision.representante.create');
Route::post('/admision/representante', [setupUnoController::class, 'store'])->name('admision.representante.store');
Route::get('/admision/representante/actualizar/{id}', [setupUnoController::class, 'edit'])->name('admision.representante.edit');
Route::post('/admision/representante/actualizar/{id}', [setupUnoController::class, 'update'])->name('admision.representante.update');
Route::get('/admision/estudiante/{id}/{email}/{numeroInscripion}', [setupDosController::class, 'create'])->name('admision.estudiante.create');
Route::post('/admision/estudiante/{id}/{email}', [setupDosController::class, 'store'])->name('admision.estudiante.store');
Route::get('/admision/buscar/cedula/representante', [buscarCedulaController::class, 'buscarCedulaRepresentante'])->name('buscar.cedula.representante');
Route::get('/admision/buscar/cedula/estudiante', [buscarCedulaController::class, 'buscarCedulaEstudiante'])->name('buscar.cedula.estudiante');

Route::get('/dashboard/home/index', [homeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/agregar/estudiante/create', [agregarEstudianteController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.agregar.estudiante.create');
Route::post('/dashboard/agregar/estudiante/store', [agregarEstudianteController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.agregar.estudiante.store');
Route::post('/dashboard/eliminar/estudiante/destroy/{id}', [agregarEstudianteController::class, 'destroy'])->middleware(['auth', 'verified'])->name('dashboard.eliminar.estudiante.destroy');
Route::get('/dashboard/ficha/estudiante/create/{id}', [homeController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.ficha.estudiante.create');
Route::get('/dashboard/ficha/padres/create', [datosPadresController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.ficha.padres.create');
Route::post('/dashboard/ficha/estudiante/store', [homeController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.ficha.estudiante.store');
Route::post('/dashboard/ficha/padres/store', [datosPadresController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.ficha.padres.store');


// Route::get('/dashboard/ficha-aspirantes/{id}', [admisionController::class, 'create'])->name('ficha.aspirante.create');
//Link de matriculacion, admision y aspirantes.
// Route::get('/ficha/matriculacion/create', [fichasController::class, 'createAspirante'])->name('ficha.aspirante.create');
// Route::post('/ficha/aspirante/store', [fichasController::class, 'storeAspirante'])->name('ficha.aspirante.store');
// Route::get('/ficha/matriculacion/registro/final/create/{cedula}', [fichasController::class, 'createFinalAspirante'])->name('ficha.aspirante.registro.final.create');
// Route::post('/ficha/aspirante/registro/final/store', [fichasController::class, 'createStoreAspirante'])->name('ficha.aspirante.registro.final.store');
// Route::get('/ficha/matriculacion/create/buscar/cedula', [fichasController::class, 'buscarCedulaFichaMatricula'])->name('buscar.cedula.ficha.matricula');

// Route::get('/ficha/salud/create', [fichasController::class, 'createSalud'])->name('ficha.salud.create');
// Route::post('/ficha/salud/store', [fichasController::class, 'storeSalud'])->name('ficha.salud.store');

// Route::get('/matriculacion/pdf/{id}', [homeController::class, 'pdfMatriculacion'])->name('matriculacion.pdf');
// Route::get('/salud/pdf/{id}', [homeController::class, 'pdfsalud'])->name('salud.pdf');

require __DIR__.'/auth.php';
