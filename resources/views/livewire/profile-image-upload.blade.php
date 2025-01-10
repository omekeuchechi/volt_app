<link rel="stylesheet" href="{{ asset('assets/dsahui/user/pro_img.css') }}">
<div class="profile-container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (auth()->user()->profile_image)
        <img src="{{ asset('storage/profile_image/' . auth()->user()->name . '/' . auth()->user()->profile_image) }}" alt="Profile Image" class="profile-image">
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data" class="profile-form">
        <input type="file" wire:model="image" class="profile-input">

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="profile-button">Save Photo</button>
    </form>
    <img src="{{ asset('storage/profile_upload/'.$user_name.'/'.$user_profile_img->profile_image) }}" alt="" class="profile-img-preview">

</div>
