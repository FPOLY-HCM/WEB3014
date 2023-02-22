<?php

declare(strict_types=1);

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\JobController;
use App\Controllers\Admin\LoginController;
use App\Controllers\Admin\CompanyController;
use App\Controllers\Admin\SettingController;
use App\Controllers\Admin\ApplicationController;
use Core\Route;

Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'login']);

Route::resource('/admin/jobs', JobController::class);
Route::resource('/admin/companies', CompanyController::class);

Route::get('/admin/settings', [SettingController::class, 'index']);
Route::post('/admin/settings', [SettingController::class, 'store']);

Route::resource('/admin/categories', CategoryController::class);

Route::resource('/admin/users', UsersController::class);

Route::resource('/admin/applications', ApplicationController::class);
