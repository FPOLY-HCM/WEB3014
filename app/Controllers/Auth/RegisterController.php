<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Core\Auth;
use Core\Controller;
use Core\Request;
use Core\View;

class RegisterController extends Controller
{
    public function index()
    {
        return View::render('auth/register');
    }

    public function register()
    {
        $request = new Request();

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        if (! $user) {
            return redirect('/register');
        }

        if ((new Auth())->attempt($email, $password)) {
            return redirect('/');
        }

        return redirect('/register');
    }
}