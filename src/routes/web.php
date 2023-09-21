<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [ContactController::class, 'index']);
Route::get('/index', [ContactController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);
Route::get('/login', [AuthenticatedSessionController::class, 'index']);
Route::get('/attendance', [ContactController::class, 'attendance']);
Route::get('/register', [RegisteredUserController::class, 'create']);




