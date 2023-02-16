<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if(! auth('admin')->check()) {
            redirect('admin/login');
        }

        return view('admin/dashboard');
    }
}