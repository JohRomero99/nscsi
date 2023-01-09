<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\representanteInvitado\representanteInvitadoHome;

Route::get('invitado/ficha-matriculacion/paso/1', [representanteInvitadoHome::class,'pasoUno'])->name('representanteInvitado.paso-1');
Route::post('invitado/ficha-matriculacion/paso/datos/1', [representanteInvitadoHome::class,'pasoUnoDatos'])->name('representanteInvitado.paso-datos-1');
Route::get('invitado/ficha-matriculacion/paso/2', [representanteInvitadoHome::class,'pasoDos'])->name('representanteInvitado.paso-2');
Route::get('invitado/ficha-matriculacion/paso/3', [representanteInvitadoHome::class,'pasoTres'])->name('representanteInvitado.paso-3');
Route::get('invitado/ficha-matriculacion/paso/4', [representanteInvitadoHome::class,'pasoCuatro'])->name('representanteInvitado.paso-4');
Route::get('invitado/ficha-matriculacion/paso/5', [representanteInvitadoHome::class,'pasoQuinto'])->name('representanteInvitado.paso-5');