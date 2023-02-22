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
        if(! request()->has('name') || ! request()->has('logo') || ! request()->has('address')) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        Company::create(request()->all());

        flash()->add('Thêm thành công', 'success');

        return redirect('/admin/companies');
    }

    public function edit()
    {
        $company = Company::findOrFail(request()->query('id'));
        $accounts = Account::all();

        return view('admin/companies/edit', compact('company', 'accounts'));
    }

    public function update()
    {
        if(! request()->has('name') || ! request()->has('logo') || ! request()->has('address')) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        $company = Company::findOrFail(request()->input('id'));

        $company->update(request()->all());

        flash()->add('Sửa thành công', 'success');

        return redirect('/admin/companies');
    }

    public function destroy()
    {
        $company = Company::findOrFail(request()->query('id'));

        $company->delete();

        flash()->add('Xóa thành công', 'success');

        return redirect('/admin/companies');
    }
}