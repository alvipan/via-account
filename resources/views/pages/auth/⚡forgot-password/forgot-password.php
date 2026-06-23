<?php

use Livewire\Component;
use Illuminate\Support\Facades\Password;

new class extends Component
{
    public $email;

    public function sendResetLink()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink([
            'email' => $this->email,
        ]);

        if ($status === Password::RESET_LINK_SENT) {
            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Link reset password sudah dikirim',
            ]);
        } else {
            $this->dispatch('notify', [
                'type' => 'error',
                'message' => 'Email tidak ditemukan',
            ]);
        }
    }

    public function render()
    {
        return $this->view()->layout('layouts::auth');
    }
};