<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;

Route::get('home', [adminController::class, 'create'])->name('admin.home');

Route::get('index', [adminController::class, 'index'])->name('admin.index');

Route::get('crear', [adminController::class, 'create'])->name('admin.create');

Route::get('actualizar', [adminController::class, 'update'])->name('admin.update');

Route::get('editar/{userId}', [adminController::class, 'edit'])->name('admin.edit');

Route::get('eliminar', [adminController::class, 'destroy'])->name('admin.destroy');