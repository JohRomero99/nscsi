<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Colector\NscCobrosController;

Route::resource('', NscCobrosController::class);


Route::get('', [NscCobrosController::class,'index'])->name('colector.home');

Route::get('/estudiantes', [NscCobrosController::class,'show'])->name('colector.show');
Route::post('/estudiantes-generar-cobro', [NscCobrosController::class,'create'])->name('colector.cobro');


/*Route::get('', function(){
    return "Hola colector"; 
});*/