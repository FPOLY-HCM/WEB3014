<?php

use App\Controllers\HomeController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\CompanyController;
use App\Controllers\Job\JoblistController;
use Core\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/job-list', [JoblistController::class, 'index']);
Route::get('/job-details', [JoblistController::class, 'show']);