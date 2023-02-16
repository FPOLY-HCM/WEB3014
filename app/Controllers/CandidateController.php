<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Account;
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
        return view('candidates/show');
    }
}