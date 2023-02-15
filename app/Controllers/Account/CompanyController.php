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
            ->get();;

        return view('account/companies/index', compact('companies'));
    }

    public function create()
    {
        return view('account/companies/create');
    }

    public function store()
    {
        Company::create([
            ...request()->all(),
            'account_id' => auth('account')->user()->id,
        ]);

        return redirect('/account/companies');
    }
}