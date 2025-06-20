<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClinicaController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/cadastro/cadastre2', [AuthController::class, 'cadastre2']);
// Comente o grupo com middleware auth:sanctum para liberar acesso temporariamente
// Route::middleware('auth:sanctum')->group(function(){
//     Route::get('/clinicas', [ClinicaController::class, 'index']);
//     Route::post('/clinicas', [ClinicaController::class, 'store']);
//     Route::get('/clinicas/{id}', [ClinicaController::class, 'show']);
//     Route::put('/clinicas/{id}', [ClinicaController::class, 'update']);
//     Route::delete('/clinicas/{id}', [ClinicaController::class, 'destroy']);
// });

// Rotas liberadas para teste (sem autenticação)
Route::get('/clinicas', [ClinicaController::class, 'index']);
Route::post('/clinicas', [ClinicaController::class, 'store']);
Route::get('/clinicas/{id}', [ClinicaController::class, 'show']);
Route::put('/clinicas/{id}', [ClinicaController::class, 'update']);
Route::delete('/clinicas/{id}', [ClinicaController::class, 'destroy']);
