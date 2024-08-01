<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('form.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [UserController::class, 'index'])->name('home');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
