<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

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
        if(! request()->has('name') || ! request()->has('phone') || ! request()->has('address')) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        $user = auth('account')->user();

        $user->update(request()->all());

        flash()->add('Cập nhật thành công', 'success');

        return redirect('/account/profile');
    }
}
