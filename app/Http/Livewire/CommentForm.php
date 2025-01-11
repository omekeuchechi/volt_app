<?php

// app/Http/Livewire/CommentForm.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Post;

class CommentForm extends Component
{
    public $post;
    public $content;

    public $comment;

    protected $rules = [
        'content' => 'required|max:500',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        // $this->comment = $comment;
    }

    public function submit()
    {
        $this->validate();

        $comment = new Comment;
        $comment->post_id = $this->post->id;
        $comment->content = $this->content;
        $comment->save();

        $this->reset('content');
        $this->emit('commentAdded');
        return back()->with('msg', 'add a comment');
    }

    public function render()
    {
        return view('livewire.comment-form', [
            // 'contents' => $this->content,
            'comments' => Comment::all(),
            'post_id' => $this->post->id
        ]);
    }
}