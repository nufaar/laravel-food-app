<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public function render()
    {
        return view('livewire.category-index', [
            'categories' => Category::latest()->get()
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $category = Category::find($id);
            $category->delete();
            session()->flash('message', "Category $category->name was deleted!");
        }
    }
}
