<?php

use Controllers\MainController;
use Controllers\UserController;

Route::get('/', [MainController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerPost']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginPost']);

Route::get('/post', [UserController::class, 'post']);
Route::post('/post', [UserController::class, 'postPost']);