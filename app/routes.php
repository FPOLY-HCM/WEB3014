<?php

use App\Controllers\HomeController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;

use Core\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return 'Contact page';
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', function () {
    return 'Post login';
});

Route::get('/register', [RegisterController::class, 'index']);
