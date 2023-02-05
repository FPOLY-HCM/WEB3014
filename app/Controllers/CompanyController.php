<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies/index');
    }

    public function show()
    {
        return view('companies/show');
    }
}