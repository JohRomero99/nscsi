<?php

use App\Http\Controllers\matriculacion\estudianteAdmitidoController;
use Illuminate\Support\Facades\Route;

Route::get('registro-estudiante', [estudianteAdmitidoController::class,'index'])->name('registro-estudiante');