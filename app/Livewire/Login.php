<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public function authUser()
    {
        $validated = $this->validate([
            'email' => ['required'],
            'password' => ['required', 'min:6']
        ]);

        if (Auth::attempt($validated)) {
            request()->session()->regenerate();

            return $this->redirect('/');
        }

        return back();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
