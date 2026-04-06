<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rrhh\rrhhController;

Route::get('index', [rrhhController::class, 'index'])->name('rrhh.index');

Route::get('crear', [rrhhController::class, 'create'])->name('rrhh.create');

Route::post('store', [rrhhController::class, 'store'])->name('rrhh.store');

Route::post('actualizar/{userId}', [rrhhController::class, 'update'])->name('rrhh.update');

Route::get('editar/{userId}', [rrhhController::class, 'edit'])->name('rrhh.edit');

Route::get('destroy/{userId}', [rrhhController::class, 'destroy'])->name('rrhh.destroy');