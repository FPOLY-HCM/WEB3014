<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use App\Models\Company;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        $categories = Category::all()->chunk(2);

        return view('home', compact('companies', 'categories'));
   }
}
