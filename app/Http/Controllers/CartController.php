<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $item = [
            'product' => $product,
            'quantity' => $request->quantity,
        ];

        if (session()->has('cart')) {
            $cart = session()->get('cart');
            $key = $this->checkItemInCart($item);

            if($key != -1){
                $cart[$key]['quantity'] += $request->quantity;
                session()->put('cart',$cart);
            }
            else {
                session()->push('cart',$item);
            }
        } else {
            session()->push('cart', $item);
        }

        return back()->with('addedToCart', 'Success! Product has been added to cart');

    }

    public function checkItemInCart($item) {
        foreach(session()->get('cart') as $key => $val){
            if($val['product']['id'] == $item['product']['id']){
                return $key;
            }
        }
        return -1;
    }

    public function removeFromCart($key){
        if(session()->has('cart')){
            $cart = session()->get('cart');
            array_splice($cart, $key,1);
            session()->put('cart', $cart);
            return back()->with('success', "Product removed from cart");
        }

        return back();
    }
}
