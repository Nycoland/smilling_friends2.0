<?php

use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DoencaController;
use App\Http\Controllers\OngController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/clinicas', [ClinicaController::class, 'index'])->name('clinicas');
    Route::get('/doencas', [DoencaController::class, 'index'])->name('doencas');
    Route::get('/ongs', [OngController::class, 'index'])->name('ongs');
});