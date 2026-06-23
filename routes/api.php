<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    $user = $request->user();
    $token = $user->token();

    abort_if($token && ! $token->can('profile'), 403, 'Token tidak memiliki scope profile.');

    return [
        'id' => $user->getKey(),
        'sub' => (string) $user->getKey(),
        'name' => $user->name,
        'email' => $token && $token->can('email') ? $user->email : null,
        'avatar' => $user->avatar,
    ];
})->name('api.user');

Route::middleware('auth:api')->get('/userinfo', function (Request $request) {
    $user = $request->user();
    $token = $user->token();

    abort_if($token && ! $token->can('profile'), 403, 'Token tidak memiliki scope profile.');

    return [
        'sub' => (string) $user->getKey(),
        'name' => $user->name,
        'email' => $token && $token->can('email') ? $user->email : null,
        'picture' => $user->avatar,
    ];
})->name('api.userinfo');
