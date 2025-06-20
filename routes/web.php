<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DoencaController;
use App\Http\Controllers\OngController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cadastro/cadastre2', [CadastroController::class, 'create'])->name('cadastre2');
Route::post('/cadastro/cadastre2', [CadastroController::class, 'store']);

Route::middleware(['auth'])->group(function() {
    Route::get('/PagInicial', [HomeController::class, 'index'])->name('home');
    Route::get('/home1/clinicas', [ClinicaController::class, 'index'])->name('clinicas');
    Route::get('/home1/doencas', [DoencaController::class, 'index'])->name('doencas');
    // Route::get('/home1/ongs', [OngController::class, 'index'])->name('ongs');
});
Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';