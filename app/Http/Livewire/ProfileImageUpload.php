<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class ProfileImageUpload extends Component
{
    use WithFileUploads;

    public $image;

    public function save()
{
    $validator = Validator::make(['image' => $this->image], [
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
        session()->flash('message', 'All fields are required.');
        return;
    }

    $user_profile_img = User::find(Auth::user()->id);
    $user_name = Auth::user()->name;

    if ($user_profile_img) {
        if ($this->image) {
            $destination = 'profile_image/' . $user_name . '/' . $user_profile_img->profile_image;

            if (File::exists(public_path($destination))) {
                File::delete(public_path($destination));
            }

            $filename = uniqid() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('profile_image/' . $user_name, $filename, 'public');

            $user_profile_img->profile_image = 'profile_image/' . $user_name . '/' . $filename;
        }

        $user_profile_img->update(); // Fixing the typo here
        session()->flash('message', 'Profile image updated!');
    }
}

    public function render()
    {
        $user_profile_img = User::find(Auth::user()->id);
        $user_name = Auth::user()->name;
        return view('livewire.profile-image-upload', [
            'user_profile_img' => $user_profile_img,
            'user_name' => $user_name,
        ]);
    }
}
