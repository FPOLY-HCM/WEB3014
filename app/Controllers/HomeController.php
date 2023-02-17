<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use App\Models\Company;
use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::query()
            ->withCount('jobs')
            ->get();
        $categories = Category::query()
            ->with(['jobs' => fn (HasMany $query): HasMany => $query->latest(), 'jobs.company'])
            ->withCount('jobs')
            ->get();
        $cities = City::all();

        return view('home', compact('companies', 'categories', 'cities'));
    }
}
