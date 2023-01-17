<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $category;

    protected $rules = [
        'category' => 'required|min:3|unique:categories,category'
    ];

    public function render()
    {
        return view('livewire.category-create');
    }

    public function store()
    {
        $this->validate();

        Category::create([
            'category' => $this->category,
        ]);

        redirect('/categories')->with('message', "Category $this->category was created!");
    }
}
