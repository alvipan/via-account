<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');
Route::livewire('/forgot-password', 'pages::auth.forgot-password')->name('password.request');
Route::livewire('/reset-password/{token}', 'pages::auth.reset-password')->name('password.reset');

Route::livewire('/dashboard', 'pages::dashboard')->middleware('auth')->name('dashboard');
Route::livewire('/profile', 'pages::profile')->middleware('auth')->name('profile');
