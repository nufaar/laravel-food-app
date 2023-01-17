<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Food;
use Livewire\Component;

class FoodIndex extends Component
{
    public $filterCategory;
    public $search;

    public function allFoods()
    {
        $foods = Food::query();

        if ($this->search) {
            if ($this->filterCategory) {
                $foods->where('name', 'like', "%$this->search%")
                    ->where('category_id', $this->filterCategory);
            } else {
                $foods->where('name', 'like', "%$this->search%");
            }
        } else {
            if ($this->filterCategory) {
                $foods->where('category_id', $this->filterCategory);
            }
        }

        return $foods->latest()->get();
    }

    public function render()
    {
        return view('livewire.food-index', [
            'foods' => $this->allFoods(),
            'categories' => Category::get()
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $food = Food::find($id);
            $food->delete();
            session()->flash('message', "Food $food->name was deleted!");
        }
    }
}
