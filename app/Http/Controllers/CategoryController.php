<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function edit($id)
    {
        return view('categories.update', [
            'category' => Category::find($id)
        ]);
    }
}
