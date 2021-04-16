<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Edit extends Component
{
    public $layoutsData = [
        'title' => 'Book List'
    ];

    public function render()
    {
        return view('livewire.book.edit',$this->layoutsData);
    }
}
