<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-white text-zinc-900 antialiased dark:bg-zinc-950 dark:text-white">

        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div
                class="absolute left-1/2 top-0 h-[650px] w-[650px] -translate-x-1/2 rounded-full bg-blue-500/15 blur-3xl">
            </div>

            <div class="absolute right-0 top-96 h-[400px] w-[400px] rounded-full bg-sky-400/10 blur-3xl">
            </div>
        </div>

        <header
            class="sticky top-0 z-50 border-b border-zinc-200/70 bg-white/80 backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/80">

            <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6">

                <a href="/" class="flex items-center gap-3">

                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                        <flux:icon.shield-check class="size-6" />
                    </div>

                    <div>

                        <h1 class="font-bold tracking-tight">
                            ViaAccount
                        </h1>

                        <p class="text-xs text-zinc-500 dark:text-zinc-400">
                            Pusat Identitas
                        </p>

                    </div>

                </a>

                <nav class="hidden items-center gap-8 text-sm md:flex">

                    <a href="#features" class="transition hover:text-blue-600">
                        Fitur
                    </a>

                    <a href="#security" class="transition hover:text-blue-600">
                        Keamanan
                    </a>

                    <a href="#developer" class="transition hover:text-blue-600">
                        Developer
                    </a>

                </nav>

                <div class="flex items-center gap-3">

                    @auth

                        <flux:button href="{{ route('dashboard') }}" variant="primary">
                            Dashboard
                        </flux:button>
                    @else
                        <flux:button href="{{ route('login') }}" variant="ghost">
                            Masuk
                        </flux:button>

                        <flux:button href="{{ route('register') }}" variant="primary">
                            Mulai Sekarang
                        </flux:button>

                    @endauth

                </div>

            </div>

        </header>

        <section class="relative overflow-hidden">

            <div class="mx-auto max-w-7xl px-6 py-24 lg:py-36">

                <div class="grid items-center gap-20 lg:grid-cols-2">

                    <div>

                        <div
                            class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-2 text-sm text-blue-700 dark:border-blue-500/20 dark:bg-blue-500/10 dark:text-blue-300">

                            <flux:icon.sparkles class="size-4" />

                            OAuth2 Single Sign-On

                        </div>

                        <h1 class="max-w-xl text-5xl font-black tracking-tight lg:text-7xl">

                            Satu Akun.

                            <span class="text-blue-600">
                                Semua Aplikasi.
                            </span>

                        </h1>

                        <p class="mt-8 max-w-2xl text-lg leading-8 text-zinc-600 dark:text-zinc-400">

                            ViaAccount adalah pusat identitas untuk seluruh aplikasi
                            dalam ekosistem ASHVIA.

                            Masuk sekali untuk mengakses semua aplikasi yang terhubung
                            secara aman menggunakan OAuth2 Single Sign-On.

                        </p>

                        <div class="mt-10 flex flex-wrap gap-4">

                            @guest

                                <flux:button href="{{ route('register') }}" variant="primary">

                                    Mulai Sekarang

                                </flux:button>
                            @else
                                <flux:button href="{{ route('dashboard') }}" variant="primary">

                                    Buka Dashboard

                                </flux:button>

                            @endguest

                            <flux:button href="#features" variant="ghost">

                                Pelajari Lebih Lanjut

                            </flux:button>

                        </div>

                        <div class="mt-14 flex flex-wrap gap-8">

                            <div>

                                <div class="text-3xl font-bold">
                                    OAuth2
                                </div>

                                <div class="text-sm text-zinc-500">
                                    Authorization Server
                                </div>

                            </div>

                            <div>

                                <div class="text-3xl font-bold">
                                    SSO
                                </div>

                                <div class="text-sm text-zinc-500">
                                    Login Sekali
                                </div>

                            </div>

                            <div>

                                <div class="text-3xl font-bold">
                                    Aman
                                </div>

                                <div class="text-sm text-zinc-500">
                                    Identitas Terpusat
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="relative">

                        <div class="absolute -right-8 -top-8 h-32 w-32 rounded-full bg-blue-500/20 blur-3xl">
                        </div>

                        <div
                            class="rounded-3xl border border-zinc-200 bg-white/80 p-8 shadow-2xl backdrop-blur dark:border-zinc-800 dark:bg-zinc-900/80">

                            <div class="flex items-center justify-between">

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white">

                                        <flux:icon.shield-check class="size-6" />

                                    </div>

                                    <div>

                                        <div class="font-semibold">
                                            ViaAccount
                                        </div>

                                        <div class="text-sm text-zinc-500">
                                            Sesi Aktif
                                        </div>

                                    </div>

                                </div>

                                <span
                                    class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-700 dark:bg-emerald-500/20 dark:text-emerald-300">

                                    Terhubung

                                </span>

                            </div>

                            <div class="my-8 rounded-2xl border border-zinc-200 p-5 dark:border-zinc-800">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 text-white">

                                        <flux:icon.user class="size-7" />

                                    </div>

                                    <div>

                                        <div class="font-semibold">
                                            Muhammad Irfan
                                        </div>

                                        <div class="text-sm text-zinc-500">
                                            nazdatk@gmail.com
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="space-y-4">

                                <div
                                    class="flex items-center justify-between rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                    <div class="flex items-center gap-3">
                                        <flux:icon.cube class="size-5 text-blue-600" />
                                        ViaBin
                                    </div>

                                    <flux:icon.check-circle class="size-5 text-emerald-500" />
                                </div>

                                <div
                                    class="flex items-center justify-between rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                    <div class="flex items-center gap-3">
                                        <flux:icon.building-storefront class="size-5 text-blue-600" />
                                        Multitoko
                                    </div>

                                    <flux:icon.check-circle class="size-5 text-emerald-500" />
                                </div>

                                <div
                                    class="flex items-center justify-between rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                    <div class="flex items-center gap-3">
                                        <flux:icon.academic-cap class="size-5 text-blue-600" />
                                        ViaKuis
                                    </div>

                                    <flux:icon.check-circle class="size-5 text-emerald-500" />
                                </div>

                                <div
                                    class="flex items-center justify-between rounded-xl border border-zinc-200 p-4 dark:border-zinc-800">
                                    <div class="flex items-center gap-3">
                                        <flux:icon.sparkles class="size-5 text-blue-600" />
                                        Aplikasi Lainnya
                                    </div>

                                    <flux:icon.check-circle class="size-5 text-emerald-500" />
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ========================================================= --}}
        {{-- Aplikasi Terhubung --}}
        {{-- ========================================================= --}}

        <section class="border-y border-zinc-200 bg-zinc-50/60 py-12 dark:border-zinc-800 dark:bg-zinc-900/40">

            <div class="mx-auto max-w-7xl px-6">

                <p class="mb-8 text-center text-sm font-medium uppercase tracking-[0.2em] text-zinc-500">
                    Terhubung dengan ViaAccount
                </p>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                    <div
                        class="rounded-2xl border border-zinc-200 bg-white p-6 transition hover:-translate-y-1 hover:border-blue-500 hover:shadow-xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div
                            class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/10">
                            <flux:icon.cube class="size-6" />
                        </div>

                        <h3 class="font-semibold">
                            ViaBin
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            Sistem pengelolaan bank sampah yang terhubung langsung dengan ViaAccount.
                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-zinc-200 bg-white p-6 transition hover:-translate-y-1 hover:border-blue-500 hover:shadow-xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div
                            class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/10">
                            <flux:icon.building-storefront class="size-6" />
                        </div>

                        <h3 class="font-semibold">
                            Multitoko
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            Kelola toko, stok, dan penjualan menggunakan akun yang sama.
                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-zinc-200 bg-white p-6 transition hover:-translate-y-1 hover:border-blue-500 hover:shadow-xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div
                            class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/10">
                            <flux:icon.academic-cap class="size-6" />
                        </div>

                        <h3 class="font-semibold">
                            ViaKuis
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            Belajar dan mengerjakan kuis tanpa perlu membuat akun baru.
                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-zinc-200 bg-white p-6 transition hover:-translate-y-1 hover:border-blue-500 hover:shadow-xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div
                            class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-600 dark:bg-blue-500/10">
                            <flux:icon.sparkles class="size-6" />
                        </div>

                        <h3 class="font-semibold">
                            Dan Banyak Lagi
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-zinc-500">
                            Ekosistem ASHVIA akan terus berkembang bersama ViaAccount.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        {{-- ========================================================= --}}
        {{-- Fitur --}}
        {{-- ========================================================= --}}

        <section id="features" class="py-28">

            <div class="mx-auto max-w-7xl px-6">

                <div class="mx-auto max-w-3xl text-center">

                    <span
                        class="rounded-full bg-blue-100 px-4 py-2 text-sm font-medium text-blue-700 dark:bg-blue-500/10 dark:text-blue-300">
                        Fitur Utama
                    </span>

                    <h2 class="mt-6 text-4xl font-black tracking-tight lg:text-5xl">

                        Semua yang Anda butuhkan
                        untuk autentikasi.

                    </h2>

                    <p class="mt-6 text-lg leading-8 text-zinc-600 dark:text-zinc-400">

                        ViaAccount membantu pengguna masuk dengan aman
                        sekaligus memudahkan developer mengintegrasikan
                        autentikasi ke dalam aplikasi.

                    </p>

                </div>

                <div class="mt-20 grid gap-8 md:grid-cols-2 xl:grid-cols-3">

                    <div
                        class="group rounded-3xl border border-zinc-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            <flux:icon.key class="size-7" />
                        </div>

                        <h3 class="mt-8 text-xl font-bold">
                            OAuth2 Standar Industri
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-600 dark:text-zinc-400">
                            Menggunakan OAuth2 sehingga proses autentikasi aman dan mudah diintegrasikan.
                        </p>

                    </div>

                    <div
                        class="group rounded-3xl border border-zinc-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            <flux:icon.finger-print class="size-7" />
                        </div>

                        <h3 class="mt-8 text-xl font-bold">
                            Login Sekali
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-600 dark:text-zinc-400">
                            Tidak perlu login berulang kali ketika berpindah antar aplikasi.
                        </p>

                    </div>

                    <div
                        class="group rounded-3xl border border-zinc-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            <flux:icon.lock-closed class="size-7" />
                        </div>

                        <h3 class="mt-8 text-xl font-bold">
                            Keamanan Maksimal
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-600 dark:text-zinc-400">
                            Password terenkripsi, token aman, dan sesi pengguna terlindungi.
                        </p>

                    </div>

                    <div
                        class="group rounded-3xl border border-zinc-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            <flux:icon.users class="size-7" />
                        </div>

                        <h3 class="mt-8 text-xl font-bold">
                            Satu Profil
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-600 dark:text-zinc-400">
                            Kelola informasi akun Anda dari satu tempat untuk seluruh aplikasi.
                        </p>

                    </div>

                    <div
                        class="group rounded-3xl border border-zinc-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            <flux:icon.code-bracket class="size-7" />
                        </div>

                        <h3 class="mt-8 text-xl font-bold">
                            Mudah Diintegrasikan
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-600 dark:text-zinc-400">
                            Siap digunakan oleh aplikasi Laravel maupun platform lainnya.
                        </p>

                    </div>

                    <div
                        class="group rounded-3xl border border-zinc-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-blue-500 hover:shadow-2xl dark:border-zinc-800 dark:bg-zinc-900">

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-blue-600">
                            <flux:icon.globe-alt class="size-7" />
                        </div>

                        <h3 class="mt-8 text-xl font-bold">
                            Ekosistem Terhubung
                        </h3>

                        <p class="mt-4 leading-7 text-zinc-600 dark:text-zinc-400">
                            Satu identitas untuk seluruh aplikasi yang berada di bawah ekosistem ASHVIA.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        {{-- ========================================================= --}}
        {{-- Keamanan --}}
        {{-- ========================================================= --}}

        <section id="security" class="py-28">

            <div class="mx-auto max-w-7xl px-6">

                <div class="grid items-center gap-16 lg:grid-cols-2">

                    <div>

                        <span
                            class="rounded-full bg-emerald-100 px-4 py-2 text-sm font-medium text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-300">

                            Keamanan Terjamin

                        </span>

                        <h2 class="mt-6 text-4xl font-black tracking-tight lg:text-5xl">

                            Dibangun dengan
                            keamanan sebagai prioritas.

                        </h2>

                        <p class="mt-8 text-lg leading-8 text-zinc-600 dark:text-zinc-400">

                            ViaAccount menjadi pusat autentikasi bagi seluruh aplikasi
                            dalam ekosistem ASHVIA. Seluruh proses login dilakukan
                            melalui sistem yang aman, terpusat, dan terpercaya.

                        </p>

                        <div class="mt-10 space-y-5">

                            <div class="flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10">
                                    <flux:icon.check class="size-5" />
                                </div>

                                <span class="font-medium">
                                    OAuth2 Authorization Server
                                </span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10">
                                    <flux:icon.check class="size-5" />
                                </div>

                                <span class="font-medium">
                                    Password Disimpan Secara Terenkripsi
                                </span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10">
                                    <flux:icon.check class="size-5" />
                                </div>

                                <span class="font-medium">
                                    Manajemen Sesi yang Aman
                                </span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10">
                                    <flux:icon.check class="size-5" />
                                </div>

                                <span class="font-medium">
                                    Komunikasi HTTPS
                                </span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10">
                                    <flux:icon.check class="size-5" />
                                </div>

                                <span class="font-medium">
                                    Token Akses yang Aman
                                </span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 dark:bg-emerald-500/10">
                                    <flux:icon.check class="size-5" />
                                </div>

                                <span class="font-medium">
                                    Identitas Terpusat
                                </span>
                            </div>

                        </div>

                    </div>

                    <div>

                        <div
                            class="rounded-[2rem] border border-zinc-200 bg-gradient-to-br from-zinc-900 to-zinc-800 p-10 text-white shadow-2xl dark:border-zinc-700">

                            <div
                                class="mx-auto flex h-32 w-32 items-center justify-center rounded-full bg-blue-600 shadow-xl shadow-blue-500/40">

                                <flux:icon.shield-check class="size-16" />

                            </div>

                            <h3 class="mt-10 text-center text-3xl font-bold">

                                Identitas yang Aman

                            </h3>

                            <p class="mx-auto mt-5 max-w-sm text-center leading-7 text-zinc-300">

                                Semua proses autentikasi dilakukan melalui
                                satu sistem identitas yang aman dan terpercaya.

                            </p>

                            <div class="mt-12 grid grid-cols-2 gap-4">

                                <div class="rounded-2xl bg-white/5 p-5 text-center">
                                    <div class="text-2xl font-bold">
                                        OAuth2
                                    </div>

                                    <div class="mt-2 text-sm text-zinc-400">
                                        Standar Industri
                                    </div>
                                </div>

                                <div class="rounded-2xl bg-white/5 p-5 text-center">
                                    <div class="text-2xl font-bold">
                                        SSO
                                    </div>

                                    <div class="mt-2 text-sm text-zinc-400">
                                        Login Sekali
                                    </div>
                                </div>

                                <div class="rounded-2xl bg-white/5 p-5 text-center">
                                    <div class="text-2xl font-bold">
                                        Aman
                                    </div>

                                    <div class="mt-2 text-sm text-zinc-400">
                                        Token & Session
                                    </div>
                                </div>

                                <div class="rounded-2xl bg-white/5 p-5 text-center">
                                    <div class="text-2xl font-bold">
                                        Terpusat
                                    </div>

                                    <div class="mt-2 text-sm text-zinc-400">
                                        Semua Aplikasi
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- ========================================================= --}}
        {{-- CTA --}}
        {{-- ========================================================= --}}

        <section class="pb-28">

            <div class="mx-auto max-w-7xl px-6">

                <div
                    class="overflow-hidden rounded-[2rem] bg-gradient-to-r from-blue-600 to-indigo-700 px-10 py-16 text-center text-white shadow-2xl">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-white/10">

                        <flux:icon.rocket-launch class="size-10" />

                    </div>

                    <h2 class="mt-8 text-4xl font-black">

                        Siap Bergabung dengan
                        ViaAccount?

                    </h2>

                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-blue-100">

                        Gunakan satu akun untuk mengakses seluruh aplikasi
                        dalam ekosistem ASHVIA dengan lebih mudah,
                        aman, dan cepat.

                    </p>

                    <div class="mt-10 flex flex-wrap justify-center gap-4">

                        @guest

                            <flux:button href="{{ route('register') }}" variant="primary">
                                Buat Akun
                            </flux:button>

                            <flux:button href="{{ route('login') }}" variant="ghost">
                                Masuk
                            </flux:button>
                        @else
                            <flux:button href="{{ route('dashboard') }}" variant="primary">
                                Buka Dashboard
                            </flux:button>

                        @endguest

                    </div>

                </div>

            </div>

        </section>

        {{-- ========================================================= --}}
        {{-- Footer --}}
        {{-- ========================================================= --}}

        <footer class="border-t border-zinc-200 py-12 dark:border-zinc-800">

            <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-8 px-6 lg:flex-row">

                <div class="flex items-center gap-4">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white">
                        <flux:icon.shield-check class="size-6" />
                    </div>

                    <div>

                        <div class="font-bold">
                            ViaAccount
                        </div>

                        <div class="text-sm text-zinc-500">
                            Pusat Identitas Ekosistem ASHVIA
                        </div>

                    </div>

                </div>

                <div class="flex flex-wrap items-center justify-center gap-8 text-sm text-zinc-500">

                    <a href="#features" class="transition hover:text-blue-600">
                        Fitur
                    </a>

                    <a href="#developer" class="transition hover:text-blue-600">
                        Developer
                    </a>

                    <a href="#security" class="transition hover:text-blue-600">
                        Keamanan
                    </a>

                    <a href="#">
                        Dokumentasi
                    </a>

                </div>

                <div class="text-sm text-zinc-500">

                    © {{ date('Y') }} ViaAccount.
                    Seluruh hak cipta dilindungi.

                </div>

            </div>

        </footer>

        @fluxScripts

    </body>

</html>
