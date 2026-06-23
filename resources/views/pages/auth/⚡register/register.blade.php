<div class="flex items-center justify-center min-h-screen">
    <flux:card class="w-full max-w-md">

        <flux:heading size="lg" class="font-semibold mb-6">Register ViaAccount</flux:heading>

        <form wire:submit="register" class="space-y-4">

            <flux:input label="Nama" wire:model="name" />

            <flux:input label="Email" wire:model="email" type="email" />

            <flux:input label="Katasandi" wire:model="password" type="password" />

            <flux:button type="submit" variant="primary" class="w-full">
                Mendaftar
            </flux:button>

            <flux:separator text="Sudah punya akun?" />

            <div class="text-center text-sm">
                <flux:button href="/login" class="w-full" wire:navigate>Masuk ViaAccount</flux:button>
            </div>

        </form>

    </flux:card>
</div>