<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function() {
    // Admin Routes
    Route::prefix('/admin')->group(function() {
        Route::get('/users', function() {
            return response()->json([
                'message' => 'Hello From Admin Users'
            ]);
        });
    });

    // Student Routes
    Route::prefix('/student')->group(function() {
        Route::get('/users', function() {
            return response()->json([
                'message' => 'Hello From Student Users'
            ]);
        });
    });
});
