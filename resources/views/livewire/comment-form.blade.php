<div>
    <form wire:submit.prevent="submit">
        <textarea wire:model="content"></textarea>
        @error('content') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Add Comment</button>
    </form>
</div>
