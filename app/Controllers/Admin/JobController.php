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
        $jobs = Job::query()->with(['company'])->latest('id')->get();

        return view('admin/jobs/index', compact('jobs'));
    }

    public function create()
    {
        $categories = Category::all();
        $companies = Company::all();

        return view('admin/jobs/create', compact('categories', 'companies'));
    }

    public function store()
    {
        $request = $this->request;

        $name = $request->input('name');
        $description = $request->input('description');
        $salary = $request->input('salary');
        $salaryRange = $request->input('salary_range');
        $category_id = $request->input('category_id');
        $company_id = $request->input('company_id');
        $content = $request->input('content');
        $numberOfPosition = $request->input('number_of_position');
        $address = $request->input('address');

        Job::create([
            'name' => $name,
            'salary' => $salary,
            'salary_range' => $salaryRange,
            'category_id' => $category_id,
            'company_id' => $company_id,
            'description' => $description,
            'content' => $content,
            'number_of_position' => $numberOfPosition,
            'address' => $address,
        ]);
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

    public function destroy()
    {
        $job = Job::findOrFail($this->request->query('id'));

        $job->delete();

        return redirect('/admin/jobs');
    }
}