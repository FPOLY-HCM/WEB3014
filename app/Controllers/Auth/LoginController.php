<?php

namespace App\Controllers\Auth;

use Core\Controller;
use Core\View;

class LoginController extends Controller
{
    public function index()
    {
        return View::render('auth/login');
    }
}