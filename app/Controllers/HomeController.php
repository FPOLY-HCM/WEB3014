<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Models\Company;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('home', compact('companies'));
    }
}