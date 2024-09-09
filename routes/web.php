<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Volt::route('/', 'pages.auth.login')
    ->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
