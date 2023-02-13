<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\Company;
use Core\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('admin/companies/index', compact('companies'));
    }

    public function create()
    {
        return view('admin/companies/create');
    }

    public function store()
    {
        Company::create(request()->all());

        return redirect('/admin/companies');
    }

    public function edit()
    {
        $company = Company::findOrFail(request()->query('id'));

        return view('admin/companies/edit', compact('company'));
    }

    public function update()
    {
        $company = Company::findOrFail(request()->input('id'));

        $company->update(request()->all());

        return redirect('/admin/companies');
    }

    public function destroy()
    {
        $company = Company::findOrFail(request()->query('id'));

        $company->delete();

        return redirect('/admin/companies');
    }
}