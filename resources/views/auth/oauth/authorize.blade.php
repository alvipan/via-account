<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Authorize Application</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
    </head>

    <body class="min-h-screen bg-zinc-50 dark:bg-zinc-900">

        <div class="flex min-h-screen items-center justify-center p-6">
            <div class="w-full max-w-lg">

                <flux:card class="space-y-6">

                    <div class="text-center">
                        <flux:heading size="xl">
                            Izinkan Aplikasi
                        </flux:heading>

                        <flux:text class="mt-2">
                            <strong>{{ $client->name }}</strong>
                            ingin mengakses akun ViaAccount Anda.
                        </flux:text>
                    </div>

                    <flux:separator />

                    <div class="space-y-4">

                        <div>
                            <flux:heading size="sm">
                                Akun
                            </flux:heading>

                            <flux:text>
                                {{ $user->name }}
                            </flux:text>

                            @if ($user->email)
                                <flux:text size="sm" class="text-zinc-500">
                                    {{ $user->email }}
                                </flux:text>
                            @endif
                        </div>

                        <div>
                            <flux:heading size="sm">
                                Izin yang Diminta
                            </flux:heading>

                            <div class="mt-3 space-y-2">

                                @foreach ($scopes as $scope)
                                    <div
                                        class="flex items-center gap-3 rounded-lg border border-zinc-200 p-3 dark:border-zinc-700">
                                        <flux:icon.check-circle class="size-5 text-green-500" />

                                        <div>
                                            <div class="font-medium">
                                                {{ $scope->description ?: $scope->id }}
                                            </div>

                                            <div class="text-sm text-zinc-500">
                                                Scope: {{ $scope->id }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <flux:separator />

                    <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

                        <form method="POST" action="{{ route('passport.authorizations.deny') }}">
                            @csrf
                            @method('DELETE')

                            <input type="hidden" name="state" value="{{ $request->state }}">

                            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">

                            <input type="hidden" name="auth_token" value="{{ $authToken }}">

                            <flux:button type="submit" variant="ghost">
                                Tolak
                            </flux:button>
                        </form>

                        <form method="POST" action="{{ route('passport.authorizations.approve') }}">
                            @csrf

                            <input type="hidden" name="state" value="{{ $request->state }}">

                            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">

                            <input type="hidden" name="auth_token" value="{{ $authToken }}">

                            <flux:button type="submit" variant="primary">
                                Izinkan
                            </flux:button>
                        </form>

                    </div>

                </flux:card>

                <div class="mt-4 text-center">
                    <flux:text size="sm" class="text-zinc-500">
                        Dengan melanjutkan, Anda mengizinkan aplikasi ini
                        mengakses data sesuai izin yang ditampilkan di atas.
                    </flux:text>
                </div>

            </div>
        </div>

        @fluxScripts
    </body>

</html>
