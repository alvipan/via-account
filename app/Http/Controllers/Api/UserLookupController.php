<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserLookupController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'email' => ['nullable', 'email'],
            'id' => ['nullable', 'integer'],
            'q' => ['nullable', 'string', 'max:100'],
        ]);

        abort_unless(
            filled($validated['email'] ?? null)
                || filled($validated['id'] ?? null)
                || filled($validated['q'] ?? null),
            422,
            'At least one search parameter is required.'
        );

        $query = User::query();

        if (filled($validated['id'] ?? null)) {
            $query->whereKey($validated['id']);
        }

        if (filled($validated['email'] ?? null)) {
            $query->where('email', $validated['email']);
        }

        if (filled($validated['q'] ?? null)) {
            $keyword = trim($validated['q']);

            $query->where(function ($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%");
            });
        }

        $user = $query->first();

        return response()->json([
            'data' => $user
                ? new UserResource($user)
                : null,
        ]);
    }
}