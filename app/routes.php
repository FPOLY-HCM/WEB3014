<?php

use App\Controllers\HomeController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\CompanyController;
use App\Controllers\BlogController;
use App\Controllers\CandidatesController;

use Core\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/companies', [CompanyController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/show', [BlogController::class, 'show']);

Route::get('/candidates', [CandidatesController::class, 'index']);
Route::get('/candidates/show', [CandidatesController::class, 'show']);
