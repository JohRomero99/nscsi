<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;

Route::get('index', [adminController::class, 'index'])->name('admin.index');

Route::get('crear', [adminController::class, 'create'])->name('admin.create');

Route::post('store', [adminController::class, 'store'])->name('admin.store');

Route::post('actualizar/{userId}', [adminController::class, 'update'])->name('admin.update');

Route::get('editar/{userId}', [adminController::class, 'edit'])->name('admin.edit');

Route::get('destroy/{userId}', [adminController::class, 'destroy'])->name('admin.destroy');