<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use Core\Controller;
use App\Models\User;


class ProfileController extends Controller
{

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