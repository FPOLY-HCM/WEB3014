<?php

declare(strict_types=1);

namespace App\Controllers\Auth;

use App\Models\Account;
use Core\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function register()
    {
        $account = Account::create(request()->all());

        if (! $account) {
            return redirect('/register');
        }

        if (auth()->attempt(request()->input('email'), request()->input('password'))) {
            return redirect('/');
        }

        return redirect('/register');
    }
}
