<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\User;
use Core\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin/users/index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
    
        return view('admin/users/create', compact('users'));
    }

    public function store()
    {
        User::create(request()->all());

        return redirect('/admin/users');
    }

    public function edit()
    {
        $user = User::findOrFail(request()->query('id'));

        return view('admin/users/edit', compact('user'));
    }

    public function update()
    {
        $user = User::findOrFail(request()->input('id'));

        $user->update(request()->all());

        return redirect('/admin/users');
    }

    public function destroy()
    {
        $user = User::findOrFail(request()->query('id'));

        $user->delete();

        return redirect('/admin/users');
    }
}