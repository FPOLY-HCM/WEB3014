<?php

declare(strict_types=1);

use App\Controllers\Account\ApplicationController;
use App\Controllers\Account\CompanyController as AccountCompanyController;
use App\Controllers\Account\JobController as AccountJobController;
use App\Controllers\HomeController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\CompanyController;
use App\Controllers\JobController;
use App\Controllers\BlogController;
use App\Controllers\CandidateController;
use App\Controllers\AccountController;

use Core\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/show', [CompanyController::class, 'show']);

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/show', [JobController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/show', [BlogController::class, 'show']);

Route::get('/candidates', [CandidateController::class, 'index']);
Route::get('/candidate/show', [CandidateController::class, 'show']);

Route::get('/account/profile', [AccountController::class, 'profile']);

Route::resource('/account/companies', AccountCompanyController::class);

Route::resource('/account/jobs', AccountJobController::class);

Route::get('/account/applications', [ApplicationController::class, 'index']);
Route::post('/account/applications/store', [ApplicationController::class, 'store']);
Route::get('/account/applications/approve', [ApplicationController::class, 'approve']);
Route::get('/account/applications/reject', [ApplicationController::class, 'reject']);

Route::get('/account/profile', [AccountController::class, 'edit']);
Route::post('/account/profile', [AccountController::class, 'update']);
