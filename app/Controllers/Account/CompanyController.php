<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use App\Models\Company;
use Core\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::query()
            ->whereBelongsTo(auth('account')->user())
            ->latest()
            ->get();

        return view('account/companies/index', compact('companies'));
    }

    public function create()
    {
        return view('account/companies/create');
    }

    public function store()
    {
        if (request()->has('logo')) {
            $logo = request()->file('logo')->upload('companies');

            if (!$logo) {
                flash()->add('Có lỗi xảy ra khi tải ảnh lên.', 'danger');

                return redirect('/account/companies/create');
            }
        }

        Company::create([
            ...request()->input(),
            'logo' => $logo ?? null,
            'account_id' => auth('account')->user()->id,
        ]);

        return redirect('/account/companies');
    }

    public function edit()
    {
        $company = Company::findOrFail(request()->query('id'));

        return view('account/companies/edit', compact('company'));
    }

    public function update()
    {
        if (
            !request()->has('name')
            || !request()->has('logo')
            || !request()->has('email')
            || !request()->has('phone')
            || !request()->has('website')
            || !request()->has('description')
            || !request()->has('address')
        ) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        $company = Company::findOrFail(request()->input('id'));
        unlink($company->logo);
        
        if (request()->has('logo')) {
            $logo = request()->file('logo')->upload('companies');

            if (!$logo) {
                flash()->add('Có lỗi xảy ra khi tải ảnh lên.', 'danger');

                return redirect('/account/companies/update');
            }
        }

        $company->update([
            ...request()->input(),
            'logo' => $logo,
        ]);

        flash()->add('Sửa thành công', 'success');

        return redirect('/account/companies');
    }

    public function destroy()
    {
        $company = Company::findOrFail(request()->query('id'));

        $company->delete();

        unlink($company->logo);

        flash()->add('Xóa thành công', 'success');

        return back();
    }
}
