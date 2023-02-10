<?php

declare(strict_types=1);

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\JobController;
use App\Controllers\Auth\LoginController;
use Core\Route;

Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'login']);

Route::get('/admin/jobs', [JobController::class, 'index']);
Route::get('/admin/jobs/create', [JobController::class, 'create']);
Route::post('/admin/jobs/store', [JobController::class, 'store']);
Route::get('/admin/jobs/edit', [JobController::class, 'edit']);
Route::post('/admin/jobs/update', [JobController::class, 'update']);
