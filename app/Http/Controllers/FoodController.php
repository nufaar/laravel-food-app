<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create()
    {
        return view('food-create');
    }

    public function edit($id)
    {
        return view('food-update', [
            'food' => Food::find($id)
        ]);
    }
}
