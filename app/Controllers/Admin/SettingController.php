<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use Core\Controller;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin/settings');
    }
    
    public function store()
    {
        setting(request()->all())->save();

        return redirect('/admin/settings');
    }
}