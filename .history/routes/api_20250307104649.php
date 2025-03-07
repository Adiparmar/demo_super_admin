<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/salons', [SalonController::class, 'index']); // Fetch salons
    Route::post('/salons', [SalonController::class, 'store']); // Create a salon
    Route::delete('/salons/{id}', [SalonController::class, 'destroy']); // Delete a salon
});