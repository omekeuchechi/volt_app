@foreach ($posts as $post)        
<div class="post">
    {{-- The whole world belongs to you. --}}
    <h1>{{ $post->title }}</h1>
    {{-- {{ dd($post) }}  --}}
    <p>{{ $post->content }}</p> 
    <h2>Comments</h2> 
<div class="comment-section" id="comments-{{ $post->id }}">
    {{-- Include the comment-form component --}} <livewire:comment-form :post="$post" /> 
    {{-- @livewire('like-dislike-Logic', ['post' => $post]) --}}
    <livewire:like-dislike-logic :post="$post">
    </div>
</div>
@endforeach
