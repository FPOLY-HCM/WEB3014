<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use App\Models\Application;
use Core\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::query()->whereBelongsTo(auth()->user())->get();

        return view('account/applications/index', compact('applications'));
    }

    public function store()
    {
        $accountId = auth('account')->user()->id;
        $jobId = request()->input('job_id');
        
        Application::create([
            'account_id' => $accountId, 
            'job_id' => $jobId,
        ]);
        
        flash()->add('Thêm thành công', 'success');

        return redirect('/account/applications');
    }
}