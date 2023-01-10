<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class CompanyController extends Controller
{
    public function index()
    {
        return View::render('companies/index');
    }
}