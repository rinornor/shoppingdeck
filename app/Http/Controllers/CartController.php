<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cartItems = $request->session()->get('cart');
        
        
        return view('cart.index', ['cartItems' => $cartItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Retrieve the product details from the database
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Retrieve the cart items from the session
        $cartItems = session('cart', []);
        

        // Add the new item to the cart or update its quantity if it already exists
        if (isset($cartItems[$productId])) {
           
            
            $cartItems[$productId]['quantity'] += $quantity;
        } else {
            $cartItems[$productId] = [
                'image' => $product->image,
                'product_id' => $productId,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity
            ];
        }
        
        
        

        // Store the updated cart items back in the session
        $request->session()->put('cart', $cartItems);
        
        // session(['cart' => $cartItems]);

        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function clearCart(Request $request)
    {
        // Clear the cart by removing the cart items from the session
        $request->session()->forget('cart');

        // Optionally, you can also flash a success message or perform other actions

        return redirect()->view('cart.index');
    }
    

    
}
