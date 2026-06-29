<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('public.index');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DestinasiController::class, 'dashboard'])->name('dashboard'); 
    Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi.index');
    Route::get('/destinasi/create', [DestinasiController::class, 'create'])->name('destinasi.create');
    Route::post('/destinasi/store', [DestinasiController::class, 'store'])->name('destinasi.store');
    Route::get('/destinasi/{id}/edit', [DestinasiController::class, 'edit'])->name('destinasi.edit');
    Route::put('/destinasi/{id}/update', [DestinasiController::class, 'update'])->name('destinasi.update');
    Route::delete('/destinasi/{id}/delete', [DestinasiController::class, 'destroy'])->name('destinasi.destroy');
    Route::get('/destinasi/export-pdf', [DestinasiController::class, 'exportPdf'])->name('destinasi.pdf');

});
Route::get('/destinasi/{id}', [DestinasiController::class, 'show'])->name('destinasi.show');
