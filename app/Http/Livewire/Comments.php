<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Http\Controllers\CommentController;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    private $controller;
    public $title = null;
    public $comment = null;
    public $image = null;
    protected $listeners = ['uploaded_image' => 'hendleImage'];



    public function __construct()
    {
        $this->controller = new CommentController;
    }

    public function mount()
    {

    }

    public function hendleImage($image)
    {
        $this->image = $image;
    }

    public function store(CommentRequest $request)
    {
        $new_comment = $this->controller->store($request);

        if($new_comment){
            $this->title = null;
            $this->comment = null;
            // $this->comments->prepend($new_comment);
            $this->dispatchBrowserEvent('store', ['massage' => 'hi']);
            session()->flash('message','stored successfully');
        }

    }

    public function delete(Comment $comment)
    {
        // $this->comments = $this->comments->filter(function($item) use ($comment) {
        //     return $item->id != $comment->id;
        // });

        $delete = $comment->delete();
        if($delete){
            $this->dispatchBrowserEvent('delete', ['id' => $comment->id]);
            session()->flash('message','deleted successfully');
        }

    }

    public function render()
    {
        return view('livewire.comments',[
            'comments' => Comment::latest('created_at','desc')->paginate(2)
        ]);
    }
}
