<?php

declare(strict_types=1);

namespace App\Controllers\Account;

use App\Models\Application;
use Core\Controller;
use App\Enums\ApplicationStatus;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::query()
            ->whereBelongsTo(auth()->user())
            ->with('job')
            ->get();

        return view('account/applications/index', compact('applications'));
    }

    public function store()
    {
        if (! auth('account')->check()) {
            return redirect('/login');
        }
        
        if (! request()->has('job_id')) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }
        $accountId = auth('account')->user()->id;
        $jobId = request()->input('job_id');
        
        Application::create([
            'account_id' => $accountId, 
            'job_id' => $jobId,
        ]);
        
        flash()->add('Thêm thành công', 'success');

        return redirect('/account/applications');
    }

    public function approve()
    {
        $application = Application::findOrFail(request()->query('id'));
        $application->update(['status' => ApplicationStatus::Accepted]);

        return back();
    }

    public function reject()
    {
        $application = Application::findOrFail(request()->query('id'));
        $application->update(['status' => ApplicationStatus::Rejected]);

        return back();
    }
}
