<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class BasketCount extends Component
{
    public $count = 0;

    #[On('product-add')]
    public function mount()
    {
        $this->count = Auth::check() ? sizeof(Auth::user()->basket->products) : 0;
    }

    public function render()
    {
        return view('livewire.basket-count');
    }
}
