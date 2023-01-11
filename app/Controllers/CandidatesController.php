<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class CandidatesController extends Controller
{
    public function index()
    {
        return View::render('candidates/index');
    }
    
    public function show()
    {
        return View::render('candidates/show');
    }
}