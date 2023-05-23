<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;

class View extends Component
{

    public $category, $product, $prodColorSelectedQuantity, $quantityCount = 1;

    public function colorSelected($productColorId)
    {
        // dd($productColorId);
        $productColor = $this->product->productColors()->where('id', $productColorId)->first();
        $this->prodColorSelectedQuantity = $productColor->quantity;

        if ($this->prodColorSelectedQuantity == 0) {
            $this->prodColorSelectedQuantity = 'habis';
        }
    }

    public function incrementQuantiry()
    {
        if ($this->quantityCount < 20) {
            $this->quantityCount++;
        }
    }
    public function decrementQuantiry()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
