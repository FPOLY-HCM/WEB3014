<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Account;
use App\Models\Job;
use Core\Controller;

class CandidateController extends Controller
{
    public function index()
    {
        $accounts = Account::all();

        return view('candidates/index', compact('accounts'));
    }
    
    public function show()
    {
        $account = Account::findOrFail(request()->query('id'));
        $jobs = Job::query()
            ->with('company')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('candidates/show', compact('account', 'jobs'));
    }
}