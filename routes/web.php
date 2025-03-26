<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/logout', Logout::class)->middleware('auth:web');
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class);
    Route::get('register', Register::class);
});
