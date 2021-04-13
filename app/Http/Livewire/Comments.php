<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;

class Comments extends Component
{

    public $comments;
    private $controller;
    private $comment = [
        'title' => null,
        'comment' => null
    ];

    public function mount()
    {
        $this->controller = new CommentController;
        $this->comments = $this->controller->index();
    }

    public function storeComments()
    {

    }

    public function render()
    {
        return view('livewire.comments');
    }
}
