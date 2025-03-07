<?php

use Illuminate\Support\Facades\Route;
use App\Models\Salon;

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
