<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class ContentHeader extends Component
{


    public $contentHeader = '';

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.partials.content-header',[
            'title' => 'hello'
        ]);
    }
}
