<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    //

    public $products;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->products = $oldCart->products;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
        else{
            $products = null;
        }
    }

    public function add($product, $id){
        $storedProduct = ['quantity' => 0, 'price' => $product->price, 'item' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $storedProduct = $this->products[$id];
            }
        }

        $storedProduct['quantity']++;
        $storedProduct['price'] = $product->price * $storedProduct['quantity'];
        $this->products[$id] = $storedProduct;
        $this->totalQuantity++;
        $this->totalPrice += $product->price;
    }

    public function reduceQuantityOfProduct($id){
        $this->products[$id]['quantity']--;
        $this->products[$id]['price'] -= $this->products[$id]['item']['price'];
        $this->totalQuantity--;
        $this->totalPrice -= $this->products[$id]['item']['price'];

        if($this->products[$id]['quantity'] <= 0){
            unset($this->products[$id]);
        }
    }

    public function removeProductFromCart($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

}
