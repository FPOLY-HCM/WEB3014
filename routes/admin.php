<?php

declare(strict_types=1);

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\JobController;
use App\Controllers\Admin\LoginController;
use App\Controllers\Admin\CompanyController;

use Core\Route;

Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'login']);

Route::resource('/admin/jobs', JobController::class);

Route::get('/admin/companies', [CompanyController::class, 'index']);    
Route::get('/admin/companies/create', [CompanyController::class, 'create']);
Route::post('/admin/companies/store', [CompanyController::class, 'store']);
Route::get('/admin/companies/edit', [CompanyController::class, 'edit']);
Route::post('/admin/companies/update', [CompanyController::class, 'update']);
Route::get('/admin/companies/delete', [CompanyController::class, 'destroy']);

