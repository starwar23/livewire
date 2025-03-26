<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'sale_products' => Product::inRandomOrder()->limit(10)->get()
        ]);
    }
}
