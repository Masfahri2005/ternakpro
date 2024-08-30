<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengurusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard',);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ini route Home Dasbor Backend
Route::get('/home', [HomeController::class, 'index'])->name('home.index')->middleware('auth');

// Ini route pengurus
Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus.index')->middleware('auth');
Route::post('/pengurus/store', [PengurusController::class, 'store'])->name('pengurus.store');
Route::get('/pengurus/{id}/edit', [PengurusController::class, 'edit'])->name('pengurus.edit');
Route::put('/pengurus/{id}', [PengurusController::class, 'update'])->name('pengurus.update');
Route::get('/pengurus/{id}', [PengurusController::class, 'show'])->name('pengurus.show', 'admin');
Route::delete('/pengurus/{id}', [PengurusController::class, 'destroy'])->name('pengurus.destroy', 'admin');

// Ini route investor/pemasok
Route::get('/investor', [InvestorController::class, 'index'])->name('investor.index')->middleware('auth');
Route::get('/investor/create', [InvestorController::class, 'create'])->name('investor.create')->middleware('auth');
Route::post('/investor', [InvestorController::class, 'store'])->name('investor.store')->middleware('auth');
Route::get('/investor/{id}/edit', [InvestorController::class, 'edit'])->name('investor.edit')->middleware('auth', 'admin');
Route::put('/investor/{id}', [InvestorController::class, 'update'])->name('investor.update')->middleware('auth', 'admin');
Route::get('/investor/{id}', [InvestorController::class, 'show'])->name('investor.show', 'admin');
Route::get('investor/download/{id}', [InvestorController::class, 'download'])->name('investor.download', 'admin');
Route::delete('/investor/{id}', [InvestorController::class, 'destroy'])->name('investor.destroy', 'admin');

// ini route transaksi 
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index')->middleware('auth');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create')->middleware('auth');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store')->middleware('auth');
Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show')->middleware('auth', 'admin');
Route::get('/transaksi/{id}/download', [TransaksiController::class, 'downloadPdf'])->name('transaksi.download')->middleware('auth', 'admin');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit')->middleware('auth', 'admin');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update')->middleware('auth', 'admin');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy')->middleware('auth', 'admin');

// ini route daftar hewan
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar.index')->middleware('auth');
Route::get('/daftar/create', [DaftarController::class, 'create'])->name('daftar.create')->middleware('auth', 'admin');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store')->middleware('auth', 'admin');
Route::get('/daftar/{id}/edit', [DaftarController::class, 'edit'])->name('daftar.edit')->middleware('auth', 'admin');
Route::put('/daftar/{id}', [DaftarController::class, 'update'])->name('daftar.update')->middleware('auth', 'admin');
Route::get('/daftar/{id}', [DaftarController::class, 'show'])->name('daftar.show')->middleware('auth','admin');
Route::delete('daftar/{id}', [DaftarController::class, 'destroy'])->name('daftar.destroy')->middleware('auth','admin');

// ini route user registrasi 
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth','admin');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('auth','admin');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth','admin');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth','admin');

// ini route awal atau home dashboard
Route::get('/awal', [AwalController::class, 'index'])->name('awal.index')->middleware('auth');
Route::post('/awal', [AwalController::class, 'store'])->name('awal.store')->middleware('auth');
Route::get('/awal/create', [AwalController::class, 'create'])->name('awal.create')->middleware('auth');
Route::delete('awal/{id}', [AwalController::class, 'destroy'])->name('awal.destroy')->middleware('auth','admin');
Route::get('/awal/{id}', [AwalController::class, 'show'])->name('awal.show')->middleware('auth','admin');
Route::get('/awal/{id}/edit', [AwalController::class, 'edit'])->name('awal.edit')->middleware('auth','admin');
Route::put('/awal/{id}', [AwalController::class, 'update'])->name('awal.update')->middleware('auth','admin');

// ini route pemantauan atau pelihara hewan
Route::get('/hewan', [HewanController::class, 'index'])->name('hewan.index')->middleware('auth');
Route::get('/hewan/create', [HewanController::class, 'create'])->name('hewan.create')->middleware('auth','admin');
Route::post('/hewan/store', [HewanController::class, 'store'])->name('hewan.store')->middleware('auth','admin');
Route::get('/hewan/{id}/edit', [HewanController::class, 'edit'])->name('hewan.edit')->middleware('auth','admin');
Route::put('/hewan/{id}', [HewanController::class, 'update'])->name('hewan.update')->middleware('auth','admin');
Route::get('/hewan/{id}', [HewanController::class, 'show'])->name('hewan.show')->middleware('auth');
Route::delete('/hewan/{id}', [HewanController::class, 'destroy'])->name('hewan.destroy','admin');
Route::get('/hewan/{id}/download', [HewanController::class, 'downloadPDF'])->name('hewan.download','admin');


