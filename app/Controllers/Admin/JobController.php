<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Core\Controller;
use Core\Request;

class JobController extends Controller
{
    protected Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function index()
    {
        $jobs = Job::query()->with(['company'])->get();

        return view('admin/jobs/index', compact('jobs'));
    }

    public function create()
    {
        return view('admin/jobs/create');
    }

    public function store()
    {
    }

    public function edit()
    {
        $categories = Category::all();
        $companies = Company::all();
        $job = Job::findOrFail($this->request->query('id'));

        return view('admin/jobs/edit', compact('categories', 'companies', 'job'));
    }
    
    public function update()
    {
    }
}