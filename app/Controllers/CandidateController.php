<?php

namespace App\Controllers;

use Core\Controller;

class CandidateController extends Controller
{
    public function index()
    {
        return view('candidates/index');
    }
    
    public function show()
    {
        return view('candidates/show');
    }
}