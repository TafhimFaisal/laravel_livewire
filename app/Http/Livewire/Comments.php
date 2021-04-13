<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Http\Controllers\CommentController;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class Comments extends Component
{

    public $comments;
    private $controller;
    public $title = null;
    public $comment = null;

    protected $rules = [
        'title' => 'required|min:10|max:100',
        'comment' => 'required|min:10|max:300',
    ];

    public function __construct()
    {
        $this->controller = new CommentController;
    }

    public function mount()
    {
        $this->comments = $this->controller->index();
    }

    public function store()
    {
        $this->validate();

        $request = new Request([
            'user_id' => 1,
            'title' => $this->title,
            'comment' => $this->comment
        ]);

        $new_comment = $this->controller->store($request);

        if($new_comment){
            $this->title = null;
            $this->comment = null;
            $this->comments->prepend($new_comment);
            $this->dispatchBrowserEvent('store', ['massage' => 'hi']);
        }

    }

    public function delete(Comment $comment)
    {
        $this->comments = $this->comments->filter(function($item) use ($comment) {
            return $item->id != $comment->id;
        });
        $this->dispatchBrowserEvent('delete', ['massage' => 'hi']);
        $comment->delete();

    }

    public function render()
    {
        return view('livewire.comments');
    }
}
