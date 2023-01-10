<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class BlogController extends Controller
{
    public function index()
    {
        return View::render('blog/blog-list');
    }
    public function blogDetails(){
        return View::render('blog/blog-details');
    }
}