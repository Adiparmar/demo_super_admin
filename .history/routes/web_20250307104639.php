<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\AuthController;

// Authentication Route
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Salon Routes (Protected with Sanctum)
