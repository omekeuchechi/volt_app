<div>
    {{-- The whole world belongs to you. --}}
    <h1>{{ $post->title }}</h1> 
    <p>{{ $post->content }}</p> 
    <h2>Comments</h2> 
    @foreach($comments as $comment) 
    <p>{{ $comment->content }}</p> 
    @endforeach 
    {{-- Include the comment-form component --}} <livewire:comment-form :post="$post" /> 
    {{-- @livewire('like-dislike-Logic', ['post' => $post]) --}}
    <livewire:like-dislike-logic :post="$post">
</div>
