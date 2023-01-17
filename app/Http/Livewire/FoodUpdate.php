<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Food;
use Livewire\Component;
use livewire;

class FoodUpdate extends Component
{
    public $name;
    public $price;
    public $categoryId;
    public $foodId;

    protected $rules = [
        'name' => 'required|min:3',
        'price' => 'required',
        'categoryId' => 'required',
    ];

    public function mount($food)
    {
        $this->name = $food->name;
        $this->price = $food->price;
        $this->categoryId = $food->category_id;
        $this->foodId = $food->id;
    }

    public function render()
    {
        return view('livewire.food-update', [
            'categories' => Category::with('food')->get()
        ]);
    }

    public function update($id)
    {
        $this->validate();

        $food = Food::find($id);
        $oldName = $food->name;
        $food->update([
            'name' => $this->name,
            'category_id' => $this->categoryId,
            'price' => $this->price
        ]);
        redirect('/foods')->with('message', "Food $oldName was updated!");
    }
}
