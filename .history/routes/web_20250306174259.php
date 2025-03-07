<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\AuthController;

// Authentication Route
Route::post('/login', [AuthController::class, 'login']);

// Salon Routes (Protected with Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/salons', [SalonController::class, 'store']);
    Route::delete('/salons/{id}', [SalonController::class, 'destroy']);
});
