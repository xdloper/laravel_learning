<?php

use App\Http\Controllers\api\authController;
use App\Http\Controllers\api\rootController;
use App\Http\Controllers\api\usersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [rootController::class, 'root']);

Route::prefix('v1')->group(function (){
    Route::prefix('auth')->group(function (){
        Route::post('/register', [usersController::class, 'createUser']);
        Route::post('/login', [authController::class, 'authentication']);
    });

    Route::get('/users', [usersController::class, 'getUsers']);
});