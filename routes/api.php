<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClinicaController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/clinicas', [ClinicaController::class, 'index']);
    Route::post('/clinicas', [ClinicaController::class, 'store']);
    Route::get('/clinicas/{id}', [ClinicaController::class, 'show']);
    Route::put('/clinicas/{id}', [ClinicaController::class, 'update']);
    Route::delete('/clinicas/{id}', [ClinicaController::class, 'destroy']);
});