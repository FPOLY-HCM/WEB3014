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
        return view('admin/categories/create');
    }

    public function store()
    {
        Category::create(request()->all());

        return redirect('/admin/categories');
    }

    public function edit()
    {
        $category = Category::findOrFail(request()->query('id'));

        return view('admin/categories/edit', compact('category'));
    }

    public function update()
    {
        $category = Category::findOrFail(request()->input('id'));

        $category->update(request()->all());

        return redirect('/admin/categories');
    }

    public function destroy()
    {
        $category = Category::findOrFail(request()->query('id'));

        $category->delete();

        return redirect('/admin/categories');
    }    
}