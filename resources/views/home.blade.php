@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
<div class=".container-fluid" id="p-header">
    <h1 class="welcome">Welcome</h1>


    @php
        $user = Auth::user();
    @endphp

    <div class="container" id="get-started">
        <p class="des">Learn tech Skills to move you to the Next level in life</p>
        <a href="{{ url('/dashboard') }}" class="get-btn">Get Started</a>
    </div>
</div>
@endsection
