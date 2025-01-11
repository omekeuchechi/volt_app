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
        // $post = Post::orderBy('created_at', 'desc')->get();
        return view('livewire.post-show', [
            // 'posts' => Post::latest()->get(),
            'posts' => Post::orderBy('created_at', 'desc')->get(),
            // 'posts' => Post::find(Post::latest()->first()),
            // 'comments' => $this->post->comments()->latest()->get(),
            'likes' => $this->post->likes()->where('liked', true)->count(),
            'dislikes' => $this->post->likes()->where('liked', false)->count(),
        ]);
    }
}