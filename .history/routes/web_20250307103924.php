<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalonController;


// Authentication Route
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Salon Routes (Protected with Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/salons', [SalonController::class, 'store']);
    Route::delete('/salons/{id}', [SalonController::class, 'destroy']);
});

