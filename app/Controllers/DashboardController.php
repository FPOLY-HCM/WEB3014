<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }
}