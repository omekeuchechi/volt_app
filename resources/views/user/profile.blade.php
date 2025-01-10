@extends('layouts.default')

<link rel="stylesheet" href="{{ asset('assets/dsahui/user/profile.css') }}">
@section('content')
<div class="profile_image">
    {{-- <livewire:profile-image-upload /> --}}
    <img src="{{ asset('profile_image/'.$user_name.'/'.$user_profile->profile_image) }}" alt="">
    <form action="{{ url('/profile_img') }}" enctype="multipart/form-data" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <div class="mb-4">  
            <input type="file" name="img_pro" class="profile-img">  
        <button type="submit" class="submit">Upload</button>  
    </form> 
</div>


@if (session('message'))
<script>
    alert('{{ session('message') }}')
</script>
@endif
<div class="profile-content">
<form action="{{ url('/update_details') }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="form">
<h3 class="i-name">Personal Information</h3>

<div class="input-container ic1">
    <label for="name" >Full Name</label><br>
<input id="name" name="name" value="{{ Auth::user()->name }}" class="input form-control" type="text" placeholder=" " />
</div>
<div class="input-container ic2">
    <label for="email" >Email</label><br>
<input id="email" name="email" value="{{ Auth::user()->email }}" class="input form-control" type="text" placeholder=" " />
</div>
<div class="input-container ic2">
    <label for="phone" >Phone</label><br>
<input id="phone" name="phone" value="{{ Auth::user()->phone }}" class="input form-control" type="text" placeholder=" " />
</div>

<button type="submit" class="submit">Update</button>
</div>
</form>

@if (session('error'))
<script>
    alert('{{ session('error') }}')
</script>
@endif

<form action="{{ url('/update_password') }}" method="POST">
@csrf
@method('PUT') 

<div class="form">
<h3 class="i-name">Change Password</h3>
<div class="input-container ic1">
    <label for="current_password" >Current Password</label><br>
<input id="current_password" name="current_password" class="input" type="password" placeholder=" " />
</div>
<div class="input-container ic2">
    <label for="password" >New Password</label><br>
<input id="password" name="password" class="input" type="password" placeholder=" " />
</div>
<div class="input-container ic2">
    <label for="password_confirmation" >Password Confirmation</label><br>
<input id="password_confirmation" name="password_confirmation" value="" class="input" type="password" placeholder=" " />
</div>
<div class="input-container ic2">

<button type="submit" class="submit">Update</button>
</div>
</form>
@endsection