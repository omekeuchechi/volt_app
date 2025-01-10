<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/dsahui/admin/style.css') }}">
    @livewireStyles
</head>
<body>
<livewire:usernav />
{{-- <livewire:userdashboardsection>     --}}
@yield('content')

@livewireScripts
<script src="{{ asset('assets/dsahui/admin/index.js') }}"></script>
<script src="{{ asset('fontawesome-free-6.5.2-web/js/all.js') }}"></script>
</body>
</html>