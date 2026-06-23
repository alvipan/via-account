<flux:card class="max-w-md mx-auto">
    <div class="space-y-4">

        <div class="text-lg font-semibold">
            Reset Password
        </div>

        <flux:input
            label="Email"
            type="email"
            wire:model="email"
        />

        <flux:input
            label="Password Baru"
            type="password"
            wire:model="password"
        />

        <flux:input
            label="Konfirmasi Password"
            type="password"
            wire:model="password_confirmation"
        />

        <flux:button variant="primary" wire:click="resetPassword" class="w-full">
            Reset Password
        </flux:button>

    </div>
</flux:card>