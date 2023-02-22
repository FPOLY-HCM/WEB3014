<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Core\Controller;

class JobController extends Controller
{
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
        if (
            ! request()->has('name')
            || ! request()->has('category_id')
            || ! request()->has('company_id')
            || ! request()->has('description')
            || ! request()->has('content')
            || ! request()->has('salary')
            || ! request()->has('salary_range')
            || ! request()->has('number_of_positions')
        ) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        Job::create(request()->all());

        flash()->add('Thêm thành công', 'success');

        return redirect('/admin/jobs');
    }

    public function edit()
    {
        $categories = Category::all();
        $companies = Company::all();
        $job = Job::findOrFail(request()->query('id'));

        return view('admin/jobs/edit', compact('categories', 'companies', 'job'));
    }

    public function update()
    {
        if (
            ! request()->has('name')
            || ! request()->has('category_id')
            || ! request()->has('company_id')
            || ! request()->has('description')
            || ! request()->has('content')
            || ! request()->has('salary')
            || ! request()->has('salary_range')
            || ! request()->has('number_of_positions')
        ) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        $job = Job::findOrFail(request()->input('id'));

        $job->update(request()->all());

        flash()->add('Sửa thành công', 'success');

        return redirect('/admin/jobs');
    }

    public function destroy()
    {
        $job = Job::findOrFail(request()->query('id'));

        $job->delete();

        flash()->add('Xóa thành công', 'success');

        return redirect('/admin/jobs');
    }
}
