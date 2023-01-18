<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.update', compact('category'));
    }
}
