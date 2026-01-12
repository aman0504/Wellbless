<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Categories extends Component
{
    public $title;

    public function store()
    {
        //validate
        $category = Category::get();
    }

    public function render()
    {
        return view('livewire.admin.categories');
    }
}
