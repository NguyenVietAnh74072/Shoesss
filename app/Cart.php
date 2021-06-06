<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {

        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $id)
    {
        $newProduct = ['quanty' => 0, 'price' => $product->pro_price, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($id, $product)) {
                $newProduct = $product[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct[$product->pro_price] = $newProduct['quanty'] * $product->pro_price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $newProduct['price'];
        $this->totalQuanty++;
    }
}
