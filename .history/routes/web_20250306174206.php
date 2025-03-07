<?php

use Illuminate\Support\Facades\Route;
use App\Models\Salon;
use App\Http\Controllers\SalonController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);


Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/salons', [SalonController::class, 'index']);
    Route::post('/salons', [SalonController::class, 'store']);
    Route::get('/salons/{id}', [SalonController::class, 'show']);
    Route::delete('/salons/{id}', [SalonController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/salons', function () {
        return response()->json(Salon::all());
    });

    Route::post('/salons', function (Illuminate\Http\Request $request) {
        return response()->json(Salon::create($request->all()), 201);
    });

    Route::get('/salons/{id}', function ($id) {
        return response()->json(Salon::findOrFail($id));
    });

    Route::delete('/salons/{id}', function ($id) {
        return response()->json(Salon::destroy($id));
    });
});
