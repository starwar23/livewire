<?php

use App\Http\Livewire\Login;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/login', Login::class);
