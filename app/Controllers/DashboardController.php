<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class DashboardController extends Controller
{
    public function index()
    {
        return View::render('dashboard/index');
    }
}