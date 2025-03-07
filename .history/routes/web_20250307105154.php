<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\AuthController;

// Authentication Route
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Salon Routes (Protected with Sanctum)
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;

Route::get('/salons', [SalonController::class, 'index']);
Route::post('/salons', [SalonController::class, 'store']);
Route::delete('/salons/{id}', [SalonController::class, 'destroy']);
