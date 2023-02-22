<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/index');
    }

    public function show()
    {
        return view('blog/show');
    }
}
