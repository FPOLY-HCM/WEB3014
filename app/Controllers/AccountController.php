<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

use Core\Auth;

class AccountController extends Controller
{   
    public function profile()
{
    $auth = new Auth;
    $user = $auth->user();

    if (!$user) {
        // Xử lý lỗi nếu $user là null
        return;
      }

    $username = explode('@', $user->email)[0];

    return view('account/profile', compact('user','username'));
}
}