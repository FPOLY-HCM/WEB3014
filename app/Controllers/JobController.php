<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs/index');
    }

    public function show()
    {
        return view('jobs/show');
    }
}
