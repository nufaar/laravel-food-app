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
        return view('foods.update', [
            'food' => Food::find($id)
        ]);
    }
}
