<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Food Apps</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @livewireStyles
</head>

<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
</body>

</html>
