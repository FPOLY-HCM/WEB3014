<?php

namespace App\Controllers\Auth;

use App\Models\Account;
use Core\Auth;
use Core\Controller;
use Core\Request;
use Core\View;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function register()
    {
        $request = new Request();

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        $account = Account::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        if (! $account) {
            return redirect('/register');
        }

        if ((new Auth('account'))->attempt($email, $password)) {
            return redirect('/');
        }

        return redirect('/register');
    }
}