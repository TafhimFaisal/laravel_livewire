<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Book extends Component
{

    public $layoutsData = [
        'title' => 'Book List'
    ];

    public function mount()
    {
        $this->dispatchBrowserEvent('data', ['massage' => 'hi']);
    }

    public function render()
    {
        return view('livewire.book.book')->layout('layouts.app',
            $this->layoutsData
        );
    }
}
