<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

Route::get('/', function () {
    return view('app');
});

// Route API
Route::prefix('/api')->group(function () {
    // API User
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'users']);
        Route::get('/{id}', [UserController::class, 'detail']);
    });

    // Api Authentication
    Route::prefix('/auth')->group(function () {
        Route::post('/login', [LoginController::class, 'login']);
        Route::post('/register', [RegisterController::class, 'register']);
        Route::middleware('auth:sanctum')->post('/logout', [LogoutController::class, 'logout']);
    });
});


// Route cấu hình SPA
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
