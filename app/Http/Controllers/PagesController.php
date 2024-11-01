<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home
    
    public function home()
    {
        $categories = Category::all();
        // dd($categories);
        return view('pages.home', ['categories' => $categories]);
    }

    //cart
    public function cart()
    {
        // dd(session()->get('cart'));
         return view('pages.cart');
    }
    //account
    public function account()
    {
        return view('pages.account');
    }
    public function checkout()
    {
       return view('pages.checkout');
    }
}
