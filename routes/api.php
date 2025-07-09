<?php

use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/example', function () {
    echo 'Hello! Welcome to Laravel 12';
});

Route::get('/get-users', [MyController::class, 'getUser']);
