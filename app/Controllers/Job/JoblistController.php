<?php
namespace App\Controllers\Job;

use Core\Controller;
use Core\View;

class JoblistController extends Controller
{
    public function index()
    {
        return View::render('job/index');
    }
    public function show()
    {
        return View::render('job/show');
    }
}
