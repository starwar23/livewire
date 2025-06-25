<?php

namespace App\Livewire;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductCard extends Component
{
    public Product $product;

    public function addToCart(Request $request, $id)
    {
        if (Auth::check()) {
            $basket_id = Auth::user()->basket?->id;
            $quantity = $request->input('quantity') ?? 1;
            if (is_null($basket_id)) {
                $basket = Auth::user()->basket()->create();
            } else {
                $basket = Basket::findOrFail($basket_id);
                $basket->touch();
            }
            if ($basket->products->contains($id)) {
                $pivotRow = $basket->products()->where('product_id', $id)->first()->pivot;
                $quantity = $pivotRow->quantity + $quantity;
                $pivotRow->update(['quantity' => $quantity]);
            } else {
                $basket->products()->attach($id, ['quantity' => $quantity]);
            }
            return back();

        } else {
            $this->redirect('/login');
        }
    }

    public function render()
    {
        return view('livewire.product-card');
    }
}
