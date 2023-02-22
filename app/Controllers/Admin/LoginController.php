<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use Core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $email = request()->input('email');
        $password = request()->input('password');

        if (auth('admin')->attempt($email, $password)) {
            return redirect('/admin');
        }

        return redirect('/admin/login');
    }
}
