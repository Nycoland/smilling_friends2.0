<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClinicaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/login', [Auth\LoginController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [Auth\LoginController::class, 'logout']);
Route::middleware('api')->group(function(){
    Route::get('/clinicas', [ClinicaController::class, 'index']);   
    Route::post('/clinicas', [ClinicaController::class, 'store']);
    Route::get('/clinicas/{id}', [ClinicaController::class, 'show']);
    Route::put('/clinicas/{id}', [ClinicaController::class, 'update']);
    Route::delete('/clinicas/{id}', [ClinicaController::class, 'destroy']);
    Route::apiResource('clinicas', ClinicaController::class);
});