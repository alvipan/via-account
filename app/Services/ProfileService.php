<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ProfileService
{
    public function updateProfile($user, array $data)
    {
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        return $user;
    }

    public function updateAvatar($user, $file)
    {
        // delete old avatar (kalau ada)
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // simpan file baru (S3-ready)
        $path = $file->store('avatars', [
            'disk' => config('filesystems.default', 'public'),
        ]);

        $user->update([
            'avatar' => $path,
        ]);

        return $path;
    }

    public function updatePassword($user, array $data)
    {
        if (! Hash::check($data['current_password'], $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'Password lama salah.',
            ]);
        }

        $user->update([
            'password' => Hash::make($data['password']),
        ]);
    }
}
