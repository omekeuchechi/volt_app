<?php

// app/Http/Livewire/PostShow.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostShow extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post-show', [
            'post' => $this->post,
            'posts' => Post::all(),
            'comments' => $this->post->comments()->latest()->get(),
            'likes' => $this->post->likes()->where('liked', true)->count(),
            'dislikes' => $this->post->likes()->where('liked', false)->count(),
        ]);
    }
}