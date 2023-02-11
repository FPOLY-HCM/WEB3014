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
        $name = request()->input('name');
        $email = request()->input('email');
        $password = request()->input('password');
        $password_confirmation = request()->input('password_confirmation');

        $account = Account::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        if (! $account) {
            return redirect('/register');
        }

        if (auth()->attempt($email, $password)) {
            return redirect('/');
        }

        return redirect('/register');
    }
}