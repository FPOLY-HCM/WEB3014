<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function store()
    {
        $accountId = auth('account')->user()->id;
        $jobId = request()->input('job_id');

        Application::create([
            'account_id' => $accountId,
            'job_id' => $jobId,
        ]);

        return redirect('account/applications/index');
    }
}
