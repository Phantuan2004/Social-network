<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

// Route cấu hình SPA
Route::get('/{any}', function () {
    return view('app');
})->where('any', '^(?!api).*$');
