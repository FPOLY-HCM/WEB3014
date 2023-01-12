<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class BlogController extends Controller
{
    public function index()
    {
        return View::render('blog/index');
    }
    
    public function show()
    {
        return View::render('blog/show');
    }
}