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
        if (! request()->has('name')
            || ! request()->has('content')
            || ! request()->has('address')
            || ! request()->has('salary')
            || ! request()->has('number_of_positions')
        ) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        Job::create(request()->all());

        flash()->add('Thêm thành công', 'success');

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

    public function edit()
    {
        $categories = Category::all();
        $cities = City::all();
        $companies = Company::query()
            ->whereBelongsTo(auth()->user())
            ->get();

        $job = Job::findOrFail(request()->query('id'));

        return view('account/jobs/edit', compact('job', 'categories', 'companies', 'cities'));
    }

    public function update()
    {
        if (! request()->has('name')
            || ! request()->has('content')
            || ! request()->has('address')
            || ! request()->has('salary')
            || ! request()->has('number_of_positions')
        ) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        $job = Job::findOrFail(request()->input('id'));

        $job->update(request()->all());

        flash()->add('Sửa thành công', 'success');

        return redirect('/account/jobs');
    }

    public function destroy()
    {
        $job = Job::findOrFail(request()->query('id'));
        
        $job->delete();

        flash()->add('Xóa thành công', 'success');

        return back();
    }
}
