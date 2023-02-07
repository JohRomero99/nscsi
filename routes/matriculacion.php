<?php

use App\Http\Controllers\matriculacion\estudianteAdmitidoController;
use Illuminate\Support\Facades\Route;

Route::get('registro/estudiante', [estudianteAdmitidoController::class,'index'])->name('registro.index');
Route::post('registro/crear', [estudianteAdmitidoController::class,'create'])->name('registro.create');
Route::get('registro/mostrar', [estudianteAdmitidoController::class,'show'])->name('registro.show');
Route::post('registro/reenviar/correo/{id}', [estudianteAdmitidoController::class,'reenviarCorreo'])->name('registro.reenviarCorreo');
Route::get('dashboard', [estudianteAdmitidoController::class,'dashboard'])->name('dashboard');