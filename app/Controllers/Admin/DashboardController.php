<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin/dashboard');
    }
}