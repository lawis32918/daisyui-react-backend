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

Route::get('/example1', function () {
    echo 'Hello! Welcome to Laravel 12';
});

Route::get('/example2', function () {
    echo 'Hello! Welcome to Mark';
});

Route::get('/get-users', [MyController::class, 'getUser']);
Route::post('/post-users', [MyController::class, 'postUser']);
Route::delete('/delete-users/{id}', [MyController::class, 'deleteUser']);
Route::put('/edit-users/{id}', [MyController::class, 'editUser']);

Route::get('/example-users', [MyController::class, 'exampleUsers']);
