<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use Core\Controller;

class LogoutController extends Controller
{
    public function index()
    {
        auth('account')->logout();

        return redirect('/admin/login');
    }
}