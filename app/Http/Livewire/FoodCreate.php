<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Food;
use Livewire\Component;

class FoodCreate extends Component
{
    public $name;
    public $price;
    public $categoryId;

    protected $rules = [
        'name' => 'required|min:3',
        'price' => 'required',
        'categoryId' => 'required',
    ];

    public function render()
    {
        return view('livewire.food-create', [
            'categories' => Category::with('food')->get()
        ]);
    }

    public function store()
    {
        $this->validate();

        Food::create([
            'name' => $this->name,
            'category_id' => $this->categoryId,
            'price' => $this->price
        ]);
        redirect('/foods')->with('message', "Food $this->name was created!");
    }
}
