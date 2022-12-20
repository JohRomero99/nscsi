<?php

use App\Http\Controllers\matriculacion\estudianteAdmitidoController;
use Illuminate\Support\Facades\Route;

Route::get('registro/estudiante', [estudianteAdmitidoController::class,'index'])->name('registro.index');
Route::post('registro/crear', [estudianteAdmitidoController::class,'create'])->name('registro.create');
// Route::get('registro/crear', [estudianteAdmitidoController::class,'conusltar'])->name('registro.consultar');
Route::get('registro/mostrar', [estudianteAdmitidoController::class,'show'])->name('registro.show');