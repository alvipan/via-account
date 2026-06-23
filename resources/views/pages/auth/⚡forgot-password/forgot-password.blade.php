<flux:card class="max-w-md mx-auto">
    <div class="space-y-4">

        <flux:heading size="lg" class="font-semibold">
            Forgot Password
        </flux:heading>

        <flux:input
            label="Email"
            type="email"
            wire:model="email"
        />

        <flux:button variant="primary" wire:click="sendResetLink" class="w-full">
            Kirim Link Reset
        </flux:button>

    </div>
</flux:card>