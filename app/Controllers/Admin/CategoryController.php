<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\Category;
use Core\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin/categories/index', compact('categories'));
    }
    public function create()
    {
        $categories = Category::all();
    
        return view('admin/categories/create', compact('categories'));
    }

    public function store()
    {
        Category::create(request()->all());

        return redirect('/admin/categories');
    }
    public function edit()
    {
        $categories = Category::findOrFail(request()->query('id'));

        return view('admin/categories/edit', compact('categories'));
    }

    public function update()
    {
        $categories = Category::findOrFail(request()->input('id'));

        $categories->update(request()->all());

        return redirect('/admin/categories');
    }

    public function destroy()
    {
        $categories = Category::findOrFail(request()->query('id'));

        $categories->delete();

        return redirect('/admin/categories');
    }    
}