<?php
namespace App\Controllers\Job;

use Core\Controller;
use Core\View;

class JobController extends Controller
{
    public function index()
    {
        return Views::render('job/index');
    }
    public function show()
    {
        return Views::render('job/show');
    }
}
