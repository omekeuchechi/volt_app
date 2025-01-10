@extends('layouts.user')

@section('content')
    <livewire:userdashboardsection />
    {{-- @if ($item == $user->course_id && $user->course_id == 1)
    @include('course\frontend')
@elseif ($item == $user->course_id && $user->course_id == 2)
    @include('course\backend')
@endif --}}
@endsection