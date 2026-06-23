<div class="flex items-center justify-center min-h-screen">
    <flux:card class="w-full max-w-md">

        <flux:heading size="lg" class="font-semibold mb-6">Masuk ViaAccount</flux:heading>

        <form wire:submit="login" class="space-y-4">

            <flux:input
                label="Email"
                wire:model="email"
                type="email"
            />

            <flux:input
                label="Katasandi"
                wire:model="password"
                type="password"
            />

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