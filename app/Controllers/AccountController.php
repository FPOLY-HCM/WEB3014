<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

class AccountController extends Controller
{
    public function profile()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $account = auth()->user();

        return view('account/profile', compact('account'));
    }
}
