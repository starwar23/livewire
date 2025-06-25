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
        $this->count = sizeof(Auth::user()->basket->products);
    }

    public function render()
    {
        return view('livewire.basket-count');
    }
}
