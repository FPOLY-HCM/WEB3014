<?php

declare(strict_types=1);

namespace App\Controllers\Admin;
use Core\Request;
use Core\Auth;

use Core\Controller;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $request = new Request();

        $email = $request->input('email');
        $password = $request->input('password');

        if ((new Auth('admin'))->attempt($email, $password)) {
            return redirect('/admin');
        }

        return redirect('/admin/login');
    }
}