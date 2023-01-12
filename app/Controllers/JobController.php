<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class JobController extends Controller
{
    public function index()
    {
        return View::render('jobs/index');
    }

    public function show()
    {
        return View::render('jobs/show');
    }
}
