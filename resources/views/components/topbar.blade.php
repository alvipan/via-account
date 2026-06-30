<flux:header class="sticky top-0 bg-zinc-50 lg:hidden dark:bg-zinc-900">

    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:heading class="ms-2">{{ $title ?? 'Dashboard' }}</flux:heading>

    <flux:spacer />

    <flux:dropdown position="top" alignt="start">
        <flux:profile circle :chevron="false"
            avatar="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : '' }}" />

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

</flux:header>
