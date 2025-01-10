<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
        <form wire:submit.prevent="add_post">
            <input type="text" wire:model="title" placeholder="Title">
            <textarea wire:model="content" placeholder="Content"></textarea>
            <button type="submit">Add Post</button>
        </form>

        <h1>Blog Posts</h1> 
        <ul> 
            @foreach($posts as $post) 
                <li> <a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a> </li> 
            @endforeach
        </ul>
</div>
