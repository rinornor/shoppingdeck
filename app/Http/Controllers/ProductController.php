<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products =  Product::all();

       return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);



        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/products', $image_name);
        }

        Product::create(['user_id' => Auth::id(), 'name' => $request->name, 'price' => $request->price, 'description' => $request->description, 'quantity' => $request->quantity, 'category' => $request->category, 'image' => $image_name]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
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
        $product = Product::findOrFail($id); 
        return view('products.edit', [ 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);



        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/products', $image_name);
        }

        $product = Product::findOrFail($id);
        $product->update(['name' => $request->name, 'price' => $request->price, 'description' => $request->description, 'quantity' => $request->quantity, 'category' => $request->category, 'image' => $image_name]);


        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }

    public function thestore()
    {
        $products = Product::all();
        return view('thestore.index', [ 'products' => $products]);
    }
}
