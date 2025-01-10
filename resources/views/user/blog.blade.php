@extends('layouts.blog')

@section('content')
<livewire:post-show :post="$post" />
@endsection
