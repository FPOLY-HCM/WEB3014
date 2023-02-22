<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Account;
use App\Models\Company;
use App\Models\Job;
use App\Models\Application;

class DashboardController extends Controller
{
    public function index()
    {
        if (! auth('admin')->check()) {
            redirect('admin/login');
        }

        $accountsCount = Account::count();
        $companiesCount = Company::count();
        $jobsCount = Job::count();
        $applicationsCount = Application::count();

        return view('admin/dashboard', compact('accountsCount', 'companiesCount', 'jobsCount', 'applicationsCount'));
    }
}
