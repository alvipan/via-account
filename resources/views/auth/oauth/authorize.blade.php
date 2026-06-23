<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungkan {{ $client->name }} - {{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-50 text-zinc-950 antialiased dark:bg-zinc-900 dark:text-white">
    <main class="flex min-h-screen items-center justify-center px-4 py-10">
        <section class="w-full max-w-md rounded-lg border border-zinc-200 bg-white p-6 shadow-sm dark:border-zinc-800 dark:bg-zinc-950">
            <div class="space-y-2">
                <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">{{ config('app.name') }}</p>
                <h1 class="text-xl font-semibold">Izinkan {{ $client->name }} mengakses akun?</h1>
                <p class="text-sm leading-6 text-zinc-600 dark:text-zinc-300">
                    Anda masuk sebagai {{ $user->email }}. Aplikasi ini meminta akses berikut.
                </p>
            </div>

            <div class="mt-6 rounded-md border border-zinc-200 dark:border-zinc-800">
                @forelse ($scopes as $scope)
                    <div class="border-b border-zinc-200 p-4 last:border-b-0 dark:border-zinc-800">
                        <p class="text-sm font-medium">{{ $scope->id }}</p>
                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">{{ $scope->description }}</p>
                    </div>
                @empty
                    <div class="p-4">
                        <p class="text-sm font-medium">profile</p>
                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">Melihat identitas dasar akun ViaAccount.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <form method="POST" action="{{ route('passport.authorizations.deny') }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full rounded-md border border-zinc-300 px-4 py-2 text-sm font-medium hover:bg-zinc-100 dark:border-zinc-700 dark:hover:bg-zinc-900">
                        Tolak
                    </button>
                </form>

                <form method="POST" action="{{ route('passport.authorizations.approve') }}">
                    @csrf
                    <button type="submit" class="w-full rounded-md bg-zinc-950 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800 dark:bg-white dark:text-zinc-950 dark:hover:bg-zinc-200">
                        Izinkan
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
