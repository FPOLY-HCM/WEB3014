<?php

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