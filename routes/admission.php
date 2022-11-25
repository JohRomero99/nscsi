<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admission\AdmissionController;

Route::get('', [AdmissionController::class, 'index'])->name('admission.home');

Route::post('', [AdmissionController::class,'createAdmission'])->name('admission.contact');