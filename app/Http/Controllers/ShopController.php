<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('shop.homepage', ['products' => $products]);
    }

    public function saveInvoice(){
        $cart = session('cart');


        $checkoutSum = 0;
        foreach ($cart as $item){
            $checkoutSum += $item['price'] * $item['quantity'];
        }
        session(['total', $checkoutSum]);

        $order = Order::create(['user_id' => Auth::id(), 'amount' => $checkoutSum]);
        return view('checkout.index',['order'=> $order]);
    }
}


