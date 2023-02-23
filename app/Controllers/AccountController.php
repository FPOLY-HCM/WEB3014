<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class AccountController extends Controller
{
    public function profile()
    {
        if (! auth()->check()) {
            return redirect('/login');
        }

        return view('account/profile');
    }

    public function edit()
    {
        $user = auth('account')->user();
        return view('account/profile', compact('user'));
    }

    public function update()
    {
        $user = auth('account')->user();
        $user->update(request()->all());

        return redirect('/account/profile');
    }
}
