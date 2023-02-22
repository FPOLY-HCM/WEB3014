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

            if (! $logo) {
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
}
