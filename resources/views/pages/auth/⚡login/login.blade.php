<div class="flex min-h-screen items-center justify-center">
    <flux:card class="w-full max-w-sm">

        <flux:heading size="lg" class="mb-6 font-semibold">Masuk ViaAccount</flux:heading>

        <form wire:submit="login" class="space-y-4">

            <flux:input label="Email" wire:model="email" type="email" />

            <flux:input label="Katasandi" wire:model="password" type="password" />

            <div class="flex justify-end text-sm">
                <flux:link variant="subtle" href="/forgot-password" wire:navigate>
                    Lupa katasandi?
                </flux:link>
            </div>

            <flux:button type="submit" variant="primary" class="w-full">
                Masuk
            </flux:button>

            <flux:separator text="atau" />

            <div class="text-center text-sm">
                <flux:button href="/register" class="w-full" wire:navigate>Buat Akun</flux:button>
            </div>

        </form>

    </flux:card>
</div>
