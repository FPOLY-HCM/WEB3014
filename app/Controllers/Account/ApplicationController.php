<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use App\Models\Application;
use Core\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::query()->whereBelongsTo(auth()->user())->get();

        return view('account/applications/index', compact('applications'));
    }
}
