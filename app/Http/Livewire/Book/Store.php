<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Store extends Component
{
    public $layoutsData = [
        'title' => 'Book List'
    ];

    public function render()
    {
        return view('livewire.book.store')->layout('layouts.app',
            $this->layoutsData
        );
    }
}
