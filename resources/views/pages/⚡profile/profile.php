<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\ProfileService;
use Illuminate\Support\Facades\Storage;

new class extends Component
{
    use WithFileUploads;

    public $name;
    public $email;

    public $avatar;
    public $avatar_preview;

    public $current_password;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $user = auth()->user();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->avatar_preview = $user->avatar
            ? Storage::url($user->avatar)
            : null;
    }

    public function updateProfile(ProfileService $service)
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $service->updateProfile(auth()->user(), [
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Profile updated successfully',
        ]);
    }

    public function updatePassword(ProfileService $service)
    {
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $service->updatePassword(auth()->user(), [
            'current_password' => $this->current_password,
            'password' => $this->password,
        ]);

        $this->reset(['current_password', 'password', 'password_confirmation']);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Password updated successfully',
        ]);
    }

    public function updatedAvatar($value)
    {
        $this->validate([
            'avatar' => 'image|max:2048', // 2MB
        ]);

        $service = app(ProfileService::class);

        $path = $service->updateAvatar(auth()->user(), $this->avatar);

        $this->avatar_preview = Storage::url($path);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Avatar updated successfully',
        ]);
    }

    function render()
    {
        return $this->view()->title('Profile');
    }
};