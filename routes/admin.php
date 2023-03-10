<?php

declare(strict_types=1);

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\JobController;
use App\Controllers\Admin\LoginController;
use App\Controllers\Admin\CompanyController;
use App\Controllers\Admin\SettingController;
use App\Controllers\Admin\ApplicationController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\UserController;
use App\Controllers\Admin\LogoutController;
use Core\Route;

Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'login']);

Route::resource('/admin/jobs', JobController::class);
Route::resource('/admin/companies', CompanyController::class);

Route::get('/admin/settings', [SettingController::class, 'index']);
Route::post('/admin/settings', [SettingController::class, 'store']);

Route::resource('/admin/categories', CategoryController::class);

Route::resource('/admin/users', UserController::class);

Route::resource('/admin/applications', ApplicationController::class);

Route::get('/admin/logout', [LogoutController::class, 'index']);
