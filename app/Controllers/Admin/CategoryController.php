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
        if (! request()->has('name') || ! request()->has('icon')) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }
        
        Category::create(request()->all());

        flash()->add('Thêm thành công', 'success');

        return redirect('/admin/categories');
    }

    public function edit()
    {
        $category = Category::findOrFail(request()->query('id'));

        return view('admin/categories/edit', compact('category'));
    }

    public function update()
    {
        if (! request()->has('name') || ! request()->has('icon')) {
            flash()->add('Vui lòng nhập đầy đủ thông tin', 'danger');

            return back();
        }

        $category = Category::findOrFail(request()->input('id'));

        $category->update(request()->all());

        flash()->add('Thêm thành công', 'success');

        return redirect('/admin/categories');
    }

    public function destroy()
    {
        $category = Category::findOrFail(request()->query('id'));

        $category->delete();

        flash()->add('Xóa thành công', 'success');

        return redirect('/admin/categories');
    }
}
