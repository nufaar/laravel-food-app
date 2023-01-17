<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryUpdate extends Component
{
    public $category;
    public $categoryId;

    protected $rules = [
        'category' => 'required|min:3'
    ];

    public function mount($category)
    {
        $this->category = $category->category;
        $this->categoryId = $category->id;
    }

    public function render()
    {
        return view('livewire.category-update');
    }

    public function update($id)
    {
        $this->validate();

        $category = Category::find($id);
        $oldCategory = $category->category;

        $category->update([
            'category' => $this->category
        ]);

        redirect('/categories')->with('message', "Category $oldCategory was updated!");
    }
}
