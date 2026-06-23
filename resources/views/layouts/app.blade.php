<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen bg-zinc-50 dark:bg-zinc-800 antialiased">

    <x-sidebar />

    <x-topbar :title="$title ? $title : 'Dashboard'" />

    <flux:main>
        {{ $slot }}
    </flux:main>

    @livewireScripts
    @fluxScripts
</body>
</html>