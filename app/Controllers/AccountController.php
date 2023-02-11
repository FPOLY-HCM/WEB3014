<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

use Core\Auth;

class AccountController extends Controller
{   
    public function profile()
    {
       $user = auth()->user();

       if (!auth()->check()) {
           return redirect('/login');
       }

       return view('account/profile', compact('user'));
    } 
}