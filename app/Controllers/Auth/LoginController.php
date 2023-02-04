<?php

namespace App\Controllers\Auth;

use Core\Controller;
use Core\Request;
use Core\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $request = new Request();

        $email = $request->input('email');
        $password = $request->input('password');

        if ((new Auth('account'))->attempt($email, $password)) {
            return redirect('/');
        }
        
        return redirect('/login');
    }
}