<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Job;
use Core\Controller;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::query()
            ->latest()
            ->withCount('applications')
            ->get();

        return view('account/jobs/index', compact('jobs'));
    }

    public function create()
    {
        $cities = City::all();
        $categories = Category::all();
        $companies = Company::query()
            ->whereBelongsTo(auth()->user())
            ->get();

        return view('account/jobs/create', compact('cities', 'categories', 'companies'));
    }

    public function store()
    {
        Job::create([
            ...request()->all(),
        ]);

        return redirect('/account/jobs');
    }

    public function show()
    {
        $job = Job::query()
            ->with('applications', function (HasMany $query): HasMany {
                return $query->with('account')->latest();
            })
            ->findOrFail(request()->query('id'));

        return view('account/jobs/show', compact('job'));
    }
}
