@extends('layouts.app')

@section('content')
    {{-- @include('includes.header') --}}
    <livewire:homeheader />
    <div class="why-content">
        <div class="why-txt">
            <h1>Why Web bros?</h1>
            <p>Whether you’re an individual looking to learn Python, Frontend, backEnd or a FullStack dev to advance your career or an enterprise team looking to cut cycle times, speed up onboarding, or give your teams the skills to realize your strategies, we remove the challenges and roadblocks slowing you down. We’re advancing the world’s tech workforce, and that starts with making your work more efficient and effective—and giving you more to celebrate.</p>
            <a href="" class="solution-btn">See our solution</a>
        </div>
        <div class="why-img">
            <img src="{{ asset('assets/img/man-with-glasses-is-looking-laptop_830188-12450.avif') }}" alt="">
        </div>
    </div>

    <div class="cousres-section">
    </div>

    {{-- @include('includes.about_content') --}}
    <livewire:homeabout />

    {{-- @include('includes.contact') --}}
    <livewire:homecontact />
@endsection

    
