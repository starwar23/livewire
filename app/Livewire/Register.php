<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;

class Register extends Component
{
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        User::query()->create($validated);

        $this->redirect('/');
    }

    #[Title('Регистрация')]
    public function render()
    {
        return view('livewire.register');
    }
}
