<?php

declare(strict_types=1);

namespace App\Controllers\Auth;

use Core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $email = request()->input('email');
        $password = request()->input('password');

        if (auth()->attempt($email, $password)) {
            return redirect('/');
        }

        flash()->add('Thông tin đăng nhập không chính xác', 'danger');

        return redirect('/login');
    }
}
