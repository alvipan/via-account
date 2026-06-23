<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component
{

    public string $email = '';
    public string $password = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            $this->addError('email', 'Email atau password salah.');
            return;
        }

        session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    public function render()
    {
        return $this->view()->layout('layouts::auth');
    }
};