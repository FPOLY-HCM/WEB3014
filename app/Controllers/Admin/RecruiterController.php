<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\Company;
use Core\Controller;

class RecruiterController extends Controller
{
    public function create()
    {
        return view('admin/recruiters/create');
    }

    public function store()
    {
        Company::create(request()->all());

        return redirect('/admin/companies');
    }

    public function edit()
    {
        $recruiter = Company::findOrFail(request()->query('id'));

        return view('admin/recruiters/edit', compact('recruiter'));
    }

    public function update()
    {
        $recruiter = Company::findOrFail(request()->input('id'));

        $recruiter->update(request()->all());

        return redirect('/admin/companies');
    }

    public function destroy()
    {
        $company = Company::findOrFail(request()->query('id'));

        $company->delete();

        return redirect('/admin/companies');
    }
}