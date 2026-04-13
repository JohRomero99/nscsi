<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\colector\colectorController;

Route::get('index', [colectorController::class, 'index'])->name('colector.index');

Route::get('crear', [colectorController::class, 'create'])->name('colector.create');

Route::post('store', [colectorController::class, 'store'])->name('colector.store');

Route::post('actualizar/{userId}', [colectorController::class, 'update'])->name('colector.update');

Route::get('editar/{userId}', [colectorController::class, 'edit'])->name('colector.edit');

Route::get('destroy/{userId}', [colectorController::class, 'destroy'])->name('colector.destroy');

Route::get('show', [colectorController::class, 'show'])->name('colector.show');

Route::post('pago', [colectorController::class, 'pago'])->name('colector.pago');

Route::get('buscar/estudiante', [colectorController::class, 'buscarEstudiante'])->name('colector.buscarEstudiante');