<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Registration Route
Route::post('/register', [AuthController::class, 'register']);

// Login Route
Route::post('/login', [AuthController::class, 'login']);


Route::get('/', function () {
    return view('welcome');
});
