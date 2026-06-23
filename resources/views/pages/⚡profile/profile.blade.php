<div class="space-y-6">

    <flux:card>
        <div class="space-y-4">

            <flux:heading size="lg" class="font-semibold">
                Profile Avatar
            </flux:heading>

            <div class="flex items-center gap-4">

                {{-- Preview --}}
                <div class="w-16 h-16 rounded-md overflow-hidden bg-zinc-200">
                    @if ($avatar_preview)
                        <img src="{{ $avatar_preview }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-sm text-zinc-500">
                            N/A
                        </div>
                    @endif
                </div>

                {{-- Upload --}}
                <div class="flex-1">
                    <flux:input
                        type="file"
                        wire:model="avatar"
                        accept="image/*"
                    />

                    <div class="text-xs text-zinc-500 mt-1">
                        JPG, PNG, max 2MB
                    </div>
                </div>

            </div>

        </div>
    </flux:card>

    {{-- PROFILE INFO --}}
    <flux:card>
        <div class="space-y-4">

            <flux:heading class="font-semibold">
                Profile Info
            </flux:heading>

            <flux:input
                label="Name"
                wire:model="name"
            />

            <flux:input
                label="Email"
                wire:model="email"
                type="email"
            />

            <div class="pt-2">
                <flux:button variant="primary" wire:click="updateProfile">
                    Save Profile
                </flux:button>
            </div>

        </div>
    </flux:card>

    {{-- PASSWORD --}}
    <flux:card>
        <div class="space-y-4">

            <flux:heading class="font-semibold">
                Change Password
            </flux:heading>

            <flux:input
                label="Current Password"
                type="password"
                wire:model="current_password"
            />

            <flux:input
                label="New Password"
                type="password"
                wire:model="password"
            />

            <flux:input
                label="Confirm Password"
                type="password"
                wire:model="password_confirmation"
            />

            <div class="pt-2">
                <flux:button variant="primary" wire:click="updatePassword">
                    Update Password
                </flux:button>
            </div>

        </div>
    </flux:card>

</div>