<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

class CheckoutController extends Controller
{
    //
    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'city' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:10',
        ]);

        $order = Order::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'total' => Cart::totalAmount(),
            'status' => 'pending',
        ]);

        $cart = session()->get('cart', []);

        if (!empty($cart) && is_array($cart)) {
            foreach (session()->get('cart') as $item) {
                $order->order_items()->create([
                    'product_id' => $item['product']['id'],  // ID sản phẩm
                    'order_id' => $order->id,  // ID đơn hàng (để liên kết với bảng orders)
                    'quantity' => $item['quantity'],
                ]);
            }
        }

        session()->forget('cart');

        return view('pages.orderSuccess',['order' => $order]);
    }

    
}
