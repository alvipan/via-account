<flux:sidebar sticky collapsible="mobile"
    class="border-r border-zinc-200 bg-zinc-100 dark:border-zinc-700 dark:bg-zinc-900">

    <flux:sidebar.header>
        <flux:sidebar.brand href="#" logo="https://fluxui.dev/img/demo/logo.png"
            logo:dark="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Via Account" />
        <flux:sidebar.collapse class="lg:hidden" />
    </flux:sidebar.header>

    <flux:sidebar.nav class="space-y-1">
        <flux:sidebar.item icon="home" href="#" href="/dashboard" :current="request()->routeIs('dashboard')"
            wire:navigate>
            Dashboard
        </flux:sidebar.item>

        <flux:sidebar.item icon="user" href="#" href="/profile" :current="request()->routeIs('profile')"
            wire:navigate>
            Profile
        </flux:sidebar.item>
    </flux:sidebar.nav>

    <flux:spacer />

    <flux:dropdown position="top" align="start" class="max-lg:hidden">
        <flux:sidebar.profile avatar="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : '' }}"
            name="{{ auth()->user()->name }}" />
        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>
                    {{ auth()->user()->name }}
                </flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator />

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle">
                    Logout
                </flux:menu.item>
            </form>
        </flux:menu>
    </flux:dropdown>

</flux:sidebar>
