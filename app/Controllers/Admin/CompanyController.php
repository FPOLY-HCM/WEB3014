<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\Company;
use App\Models\Account;
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
        $accounts = Account::all();
    
        return view('admin/companies/create', compact('accounts'));
    }

    public function store()
    {
        Company::create(request()->all());

        return redirect('/admin/companies', compact(flash()->add('Thêm thành công', 'success')));
    }

    public function edit()
    {
        $company = Company::findOrFail(request()->query('id'));
        $accounts = Account::all();

        return view('admin/companies/edit', compact('company', 'accounts'));
    }

    public function update()
    {
        $company = Company::findOrFail(request()->input('id'));

        $company->update(request()->all());

        return redirect('/admin/companies', compact(flash()->add('Sửa thành công', 'success')));
    }

    public function destroy()
    {
        $company = Company::findOrFail(request()->query('id'));

        $company->delete();

        return redirect('/admin/companies', compact(flash()->add('Xóa thành công', 'success')));
    }
}