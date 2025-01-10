<?php

// app/Http/Livewire/LikeDislike.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\LikeDislike;
use App\Models\Post;

class LikeDislikeLogic extends Component
{
    public $post;
    public $likes;
    public $dislikes;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->likes = $post->likes()->where('liked', true)->count();
        $this->dislikes = $post->likes()->where('liked', false)->count();
    }

    public function like()
    {
        $likeDislike = new LikeDislike;
        $likeDislike->post_id = $this->post->id;
        $likeDislike->liked = true;
        $likeDislike->save();

        $this->likes++;
    }

    public function dislike()
    {
        $likeDislike = new LikeDislike;
        $likeDislike->post_id = $this->post->id;
        $likeDislike->liked = false;
        $likeDislike->save();

        $this->dislikes++;
    }

    public function render()
    {
        return view('livewire.like-dislike-Logic');
    }
}

// resources/views/livewire/like-dislike.blade.php
