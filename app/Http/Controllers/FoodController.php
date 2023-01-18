<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create()
    {
        return view('foods.create');
    }

    public function edit($id)
    {
        $food = Food::findOrFail($id);
        return view('foods.update', compact('food'));
    }
}
