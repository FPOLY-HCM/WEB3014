<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::query()->with(['company', 'city'])->get();

        return view('jobs/index', compact('jobs'));
    }

    public function show()
    {
        $job = Job::findOrFail(request()->query('id'));
        $company = Job::query()->with(['company'])->findOrFail(request()->query('id'));

        return view('jobs/show', compact('job', 'company'));
    }
}
