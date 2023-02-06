<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use App\Models\Company;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        $categories = Category::all();

        return view('home', compact('companies', 'categories'));
   }
}
