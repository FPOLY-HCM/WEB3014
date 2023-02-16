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
        if(! auth('admin')->check()) {
            redirect('admin/login');
        }

        $totalAccounts = Account::count();
        $totalCompanies = Company::count();
        $totalJobs = Job::count();
        $totalApplications = Application::count();

        return view('admin/dashboard',['totalAccounts' => $totalAccounts, 'totalCompanies' => $totalCompanies,'totalJobs' => $totalJobs,'totalApplications' => $totalApplications]);
    }
}