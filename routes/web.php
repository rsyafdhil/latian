<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('templates.home');
});

Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');

Route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');

Route::post('/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');

Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit');

Route::put('/pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');

Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');