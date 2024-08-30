<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;

Route::get('/', function () {
    return view('welcome');
});

// ini route awal atau home dashboard
Route::get('/awal', [AwalController::class, 'index'])->name('awal.index');
Route::post('/awal', [AwalController::class, 'store'])->name('awal.store');
Route::get('/awal/create', [AwalController::class, 'create'])->name('awal.create');
Route::delete('awal/{id}', [AwalController::class, 'destroy'])->name('awal.destroy');
Route::get('/awal/{id}', [AwalController::class, 'show'])->name('awal.show');
Route::get('/awal/{id}/edit', [AwalController::class, 'edit'])->name('awal.edit');
Route::put('/awal/{id}', [AwalController::class, 'update'])->name('awal.update');

