<?php

use App\Controllers\HomeController;
use Core\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return 'Contact page';
});

Route::get('/login', function () {
    return 'Login page';
});

Route::post('/login', function () {
    return 'Post login';
});