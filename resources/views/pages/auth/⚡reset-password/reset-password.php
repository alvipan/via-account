<?php

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

new class extends Component
{
    public $email;
    public $password;
    public $password_confirmation;
    public $token;

    public function mount($token)
    {
        $this->token = $token;
        $this->email = request()->email;
    }

    public function resetPassword()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function (User $user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Password berhasil direset',
            ]);

            return redirect()->route('login');
        }

        $this->dispatch('notify', [
            'type' => 'error',
            'message' => 'Token tidak valid atau expired',
        ]);
    }

    public function render()
    {
        return $this->view()->layout('layouts::auth');
    }
};