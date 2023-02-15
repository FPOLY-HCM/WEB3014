<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Company;
use Core\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('companies/index', compact('companies'));
    }

    public function show()
    {
        $company = Company::query()
            ->with('jobs', fn ($query) => $query->limit(3))
            ->findOrFail(request()->query('id'));

        return view('companies/show', compact('company'));
    }
}