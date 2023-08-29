<?php

use App\Http\Controllers\{UserController, AuthController};
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'login']);