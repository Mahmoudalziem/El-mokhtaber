<?php

use App\Http\Controllers\Patient\patientController;
use Illuminate\Support\Facades\Route;


Route::namespace("Patient")->group(function () {
    Route::get('/', [patientController::class,'create'])->name('create');
    Route::post('/create', [patientController::class,'store'])->name('store');
    Route::get('/edit/{id}', [patientController::class,'edit'])->name('edit');
    Route::put('/{id}', [patientController::class,'update'])->name('update');
    Route::get('/all', [patientController::class,'index'])->name('index');
    Route::get('/search', [patientController::class,'search'])->name('search');
    Route::post('/find/{id}', [patientController::class,'find'])->name('find');
    Route::get('/qr-code/{id}', [patientController::class,'qr'])->name('qr-code');
    Route::get('/report/{id}', [patientController::class,'show'])->name('show');
    Route::get('/report/print/{id}', [patientController::class,'pdf'])->name('pdf');
});
