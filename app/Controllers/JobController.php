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
        $job = Job::query()
            ->with('company', fn ($query) => $query->withCount('jobs'))
            ->findOrFail(request()->query('id'));

        $similarJobs = Job::query()
            ->where('category_id', $job->category_id)
            ->with(['company', 'city'])
            ->inRandomOrder()
            ->get();

        return view('jobs/show', compact('job', 'similarJobs'));
    }
}
