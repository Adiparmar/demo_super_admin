<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\AuthController;

// Authentication Route
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Salon Routes (Protected with Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/salons', [SalonController::class, 'index']); // Fetch salons
    Route::post('/salons', [SalonController::class, 'store']); // Create a salon
    Route::delete('/salons/{id}', [SalonController::class, 'destroy']); // Delete a salon
});