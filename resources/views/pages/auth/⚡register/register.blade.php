<div class="flex min-h-screen items-center justify-center">
    <flux:card class="w-full max-w-sm">

        <flux:heading size="lg" class="mb-6 font-semibold">Register ViaAccount</flux:heading>

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
