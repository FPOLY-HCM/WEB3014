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
        return view('jobs/show');
    }
}
