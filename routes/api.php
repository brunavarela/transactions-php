<?php

use App\Http\Controllers\{UserController, AuthController, TransactionController};
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'create']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('jwt.verify')->group(function() {
  Route::post('/users/{id}/deposits', [UserController::class, 'deposit']);
  Route::post('transactions', [TransactionController::class, 'create']);
});