<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Category;
use App\Models\City;
use Core\Controller;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $categories = Category::all();
        $jobs = Job::query()
            ->with(['company', 'city'])
            ->get();

        return view('jobs/index', compact('jobs', 'cities', 'categories'));
    }

    public function show()
    {
        $job = Job::query()
            ->with('company', fn ($query) => $query->withCount('jobs'))
            ->findOrFail(request()->query('id'));

        $similarJobs = $job->getSimilarJobs();

        return view('jobs/show', compact('job', 'similarJobs'));
    }
}
