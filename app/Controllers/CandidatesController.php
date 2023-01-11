<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class CandidatesController extends Controller
{
    public function index()
    {
        return View::render('candidates/candidates-list');
    }
    
    public function candidatesDetails(){
        return View::render('candidates/candidates-details');
    }
}