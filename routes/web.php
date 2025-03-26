<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class);
    Route::get('register', Register::class);
});
