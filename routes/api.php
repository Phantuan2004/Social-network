<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'users']);
        Route::get('/{id}', [UserController::class, 'detail']);
    });
});

Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('login', [LoginController::class, 'unauthenticated'])->name('login.get'); // Handle unauthenticated request (check-token)
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::middleware('auth:sanctum')->post('logout', [LogoutController::class, 'logout'])->name('logout');
    Route::middleware('auth:sanctum')->get('/check-token', [LoginController::class, 'checkToken'])->name('check-token');
});
