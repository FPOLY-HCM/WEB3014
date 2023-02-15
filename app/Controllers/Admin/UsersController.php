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
        $users = User::findOrFail(request()->query('id'));

        return view('admin/users/edit', compact('users'));
    }
    public function update()
    {
        $users = User::findOrFail(request()->input('id'));

        $users->update(request()->all());

        return redirect('/admin/users');
    }

    public function destroy()
    {
        $users = User::findOrFail(request()->query('id'));

        $users->delete();

        return redirect('/admin/users');
    }

}