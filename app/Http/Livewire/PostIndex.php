<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post; 
class PostIndex extends Component 
{ 
    public $title;
    public $content;
    public function render() 
    { 
        return view('livewire.post-index', 
        [
            'posts' => Post::latest()->get(), 
        ]);
    }

    public function add_post()
    {
        $this->validate([
             'title' => 'required|max:255',
             'content' => 'required',
         ]);

         $post = new Post();
         $post->title = $this->title;
         $post->content = $this->content;
         $post->save();
            $this->title = '';
            $this->content = '';
            
            session()->flash('message', 'Profile image updated!');

    }

    
}
