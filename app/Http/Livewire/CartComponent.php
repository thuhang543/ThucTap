<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart-component')->layout("layouts.base");
    }
    public function increaseQuantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty+1;
        Cart::update($rowId,$qty);
    }
    public function decreaseQuantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty-1;
        Cart::update($rowId,$qty);
    }
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('product.cart');
    }
    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed from cart');
    }
    public function destroyAll(){
        Cart::destroy();
    }
}
