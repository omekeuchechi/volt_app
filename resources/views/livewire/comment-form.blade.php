<div>
@if (session('msg'))
    <script>
        alert('{{ session('msg') }}')
    </script>
@endif
    @foreach($comments as $content)
    @if ($post_id == $content->post_id)
    <p>{{ $content->content }}</p>
    @endif
    @endforeach
    <form wire:submit.prevent="submit">
        <textarea wire:model="content"></textarea>
        @error('content') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Add Comment</button>
    </form>
</div>
